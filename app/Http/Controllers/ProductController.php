<?php

namespace App\Http\Controllers;

use App\Http\Model\Budget;
use App\Http\Model\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('product.index')
            ->with('products', $products);
    }


    public function create()
    {
        return view('product.create');
    }


    public function store(Request $request)
    {
        $product = new Product();

        $request->validate([
            'name'        => 'required | min:2 | max:80',
            'description' => 'required',
            'value'       => 'required | numeric'
        ]);

        $product->fill($request->all());
        $product->save();

        return redirect(route('product.index'));

    }


    public function show(Product $product)
    {
        return view('product.show')
            ->with('product', $product);
    }


    public function edit(Product $product)
    {
        return view('product.edit')
            ->with('product', $product);
    }


    public function update(Request $request, Product $product)
    {
        $product->fill($request->all());
        $product->save();
        return redirect(route('product.index'));
    }


    public function destroy(Product $product)
    {
        if (Budget::where('product', $product->id)->exists()) {
            return redirect(route('product.index'));
        }

        $product->delete();
        return redirect(route('product.index'));
    }
}
