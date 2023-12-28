<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:3',
            'quantity' => 'required|numeric',
            'price' => 'required|decimal:0, 2',
            'description' => 'nullable'
        ]);

        logger($data);
        $newProduct = Product::create($data);
        return redirect()->route('products.show');
    }
    public function show(Request $request, Product $product = null)
    {
        $search = $request->input('search');
        $products = Product::all();
        // return view('products.index', ['products' => $products]);

        $products = Product::when($search, function ($query) use ($search) {
            return $query->where('name', 'LIKE', '%' . $search . '%');
        })->get();

        return view('products.index', compact('products'));
    }
    public function delete(Product $product)
    {
        logger($product);
        $product->delete();
        return redirect()->route('products.show')->with('success', 'Product deleted successfully.');
        ;
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('products.show')->with('success', 'Product updated successfully.');
    }

}
