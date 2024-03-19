<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\{Budget, Product};
use App\Services\ProductService;

class ProductController extends Controller
{
    public function index()
    {
        $products = (new ProductService())->listProduct();

        return view('product.index')
            ->with('products', $products);
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(ProductRequest $request, Product $product)
    {
        (new ProductService())->saveProduct($request, $product);

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

    public function update(ProductRequest $request, Product $product)
    {
        (new ProductService())->updateProduct($request, $product);

        return redirect(route('product.index'));
    }

    public function destroy(Product $product)
    {
        if (Budget::where('product', $product->id)->exists()) {
            return redirect(route('product.index'));
        }

        (new ProductService())->destroyProduct($product);

        return redirect(route('product.index'));
    }
}
