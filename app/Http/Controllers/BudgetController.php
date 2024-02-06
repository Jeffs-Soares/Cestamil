<?php

namespace App\Http\Controllers;

use App\Http\Model\Budget;
use App\Http\Model\Product;
use App\Http\Model\Region;
use App\Traits\BudgetTrait;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    use BudgetTrait;

    public function index()
    {
        $budgets = Budget::all();

        return view('budget.index')
            ->with('budgets', $budgets);
    }


    public function create()
    {
        $products = Product::all();
        $regions = Region::all();

        return view('budget.create')
            ->with('products', $products)
            ->with('regions', $regions);
    }


    public function store(Request $request, Budget $budget)
    {
        $budgetUpdated = $this->calcTotalValue('post', $request, $budget);

        $budget->fill($budgetUpdated);
        $budget->save();

        return redirect(route('budget.index'));
    }


    public function show(Budget $budget)
    {
        return view('budget.show')
            ->with('budget', $budget);
    }


    public function edit(Budget $budget)
    {
        $products = Product::all();
        $regions = Region::all();

        return view('budget.edit')
            ->with('budget', $budget)
            ->with('products', $products)
            ->with('regions', $regions);
    }

    public function update(Request $request, Budget $budget)
    {
        /**
         * Mapeando Casos possíveis
         * 
         * Campos: Valor Total, Pago, Restante, Adicional
         * 
         * Update -- Form - PUT
         * 
         * 0 - Se o adicional mudou, se sim entrar nas condições
         * 
         * Se mudou, foi pra mais ou pra menos?
         * 
         * 
         * 1 - Valor total 100%, Pago 0%, Restante 100%, Adicional 0
         * 
         * 2 - Valor Total 50%, Pago 50%, Restante 50%, Adicional 0
         * 
         * 3 - Valor Total 0%, Pago 100%, Restante 0%, Adicional 0
         * 
         * 4 - Valor total 100%, Pago 0%, Restante 100%, Adicional 1
         * 
         * 5 - Valor Total 50%, Pago 50%, Restante 50%, Adicional 1
         * 
         * 6 - Valor Total 0%, Pago 100%, Restante 0%, Adicional 1
         * 
         */


        //dd($request->all(), $budget->getAttributes());

        //TODO: Verifica se o valor inicial é igual ou valor mandado
        if($request->additional == $budget->additional){

            $budget->fill($request->all());
            $budget->total_value = $this->calcTotalValue('put', $request, $budget);
            $budget->remnant = $budget->total_value - $budget->pay; 
            $budget->save();
            return redirect(route('budget.index'));
           
        };
        

        //TODO: Foi acréscimo ou redução

        if($request->additional > $budget->additional  ){
            //TODO: Acréscimo

            $budget->fill($request->all());
            $budget->total_value = $this->calcTotalValue('put', $request, $budget);
            $budget->remnant = $budget->total_value - $budget->pay;
            $budget->save();
            return redirect(route('budget.index'));
            

        };

        if($request->additional < $budget->additional ){
            //TODO: Decréscimo

            $budget->fill($request->all());
            $budget->total_value = $this->calcTotalValue('put', $request, $budget);
            $budget->remnant = $budget->total_value - $budget->pay;

            if($budget->remnant < 0){

                return redirect(route('budget.edit', $budget));
            };

            $budget->save();
            return redirect(route('budget.index'));
           
        };

        // $budget->fill($request->all());
        // $budget->total_value = $this->calcTotalValue('put', $request, $budget);
    
        // $budget->save();

        return redirect(route('budget.index'));
        
    }

    public function destroy(Budget $budget)
    {
        $budget->delete();
        return redirect(route('budget.index'));
    }

    function payCreate(Budget $budget)
    {
        return view('budget.pay')->with('budget', $budget);
    }

    function payStore(Request $request, Budget $budget)
    {

        $payRequest = $request->get('pay');

        if ($payRequest > $budget->total_value) {

            return redirect(route('payCreate', $budget));
        } else if ($payRequest > $budget->remnant) {

            return redirect(route('payCreate', $budget));
        }


        if ($budget->pay + $payRequest > $budget->total_value) {
            return redirect(route('payCreate', $budget));
        }

        $budget->pay += $payRequest;
        $budget->remnant = $budget->total_value - $budget->pay;
        $budget->save();

        return redirect(route('budget.index'));
    }
}
