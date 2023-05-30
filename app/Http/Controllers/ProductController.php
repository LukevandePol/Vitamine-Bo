<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }


    public function store()
    {
        $attributes = request()->validate([
            'naam' => ['required', 'max:255'],
            'smaak' => ['max:255'],
            'type' => ['required', 'max:255'],
            'inhoud' => ['max:255'],
        ]);

        $productdata = [
            'naam' => $attributes['naam'],
            'smaak' => $attributes['smaak'],
            'inhoud' => $attributes['inhoud']
        ];

        Product::create($attributes);

        return back()->with('success', 'Product toegevoegd!');
    }

    /**
     * Store a newly created resource in storage.
     */
//Request $request
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();

        return view('admin.product', compact('products'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
