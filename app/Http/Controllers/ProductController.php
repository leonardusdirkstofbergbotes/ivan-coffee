<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;


class ProductController extends Controller
{
    public function index()
    {
        // Fetch all products
        $products = Product::all();
        return response()->json($products);
    }

    public function show($id)
    {
        // Fetch a specific product by ID
        $product = Product::findOrFail($id);
        return response()->json($product);
    }

    public function store(StoreProductRequest $request)
    {
        // Validation passed, store a new product
        $product = Product::create($request->all());
        return response()->json($product, 201);
    }

    public function update(UpdateProductRequest $request, $id)
    {
        // Validation passed, update an existing product
        $product = Product::findOrFail($id);
        $product->update($request->all());

        return response()->json($product, 200);
    }

    public function destroy($id)
    {
        // Delete a product
        $product = Product::findOrFail($id);
        $product->delete();

        return response()->json(null, 204);
    }
}
