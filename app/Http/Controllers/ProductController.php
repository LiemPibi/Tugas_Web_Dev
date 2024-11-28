<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = array_fill(0, 20, [
            'id' => rand(1, 1000),
            'name' => 'Product ' . rand(1, 100),
            'description' => 'Description for product.',
            'price' => rand(100, 1000)
        ]);
        return view('products.list', compact('products'));
    }

    public function create()
    {
        return view('products.form');
    }

    public function edit($id)
    {
        $product = [
            'id' => $id,
            'name' => 'Product ' . $id,
            'description' => 'Sample description',
            'price' => rand(100, 1000)
        ];
        return view('products.form', compact('product'));
    }

    public function store(Request $request)
    {
        return redirect()->route('products')->with('success', 'Product added successfully!');
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('products')->with('success', 'Product updated successfully!');
    }

    public function show($id)
    {
        $product = [
            'id' => $id,
            'name' => 'Product ' . $id,
            'description' => 'Sample description',
            'price' => rand(100, 1000)
        ];
        return view('products.show', compact('product'));
    }
}
