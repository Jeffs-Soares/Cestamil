<?php

namespace App\Services;
use App\Models\Product;
use App\Http\Requests\ProductRequest;

class ProductService
{

    public function list()
    {
        return Product::all();
    }

    public function save(ProductRequest $request, Product $product)
    {
        $product->fill($request->all());
        return $product->save();
    }

    public function update(ProductRequest $request, Product $product)
    {
        $product->fill($request->all());
        return $product->save();
    }

}
