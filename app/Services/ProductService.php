<?php

namespace App\Services;

use App\Http\Requests\ProductRequest;
use App\Models\Product;

class ProductService
{
    public function listProduct()
    {
        return Product::all();
    }

    public function saveProduct(ProductRequest $request, Product $product)
    {
        $product->fill($request->all());

        return $product->save();
    }

    public function updateProduct(ProductRequest $request, Product $product)
    {
        $product->fill($request->all());

        return $product->save();
    }

    public function destroyProduct(Product $product)
    {
        return $product->delete();
    }

}
