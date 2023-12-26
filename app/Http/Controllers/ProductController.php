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
        return redirect()->route('products.index');
    }

    public function show(Product $product)
    {
        $products = Product::all();
        // return view('products.index', ['products' => $products]);
        return view('products.index', compact('products'));
    }
}
