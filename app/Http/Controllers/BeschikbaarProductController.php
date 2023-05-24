<?php

namespace App\Http\Controllers;

use App\Models\BeschikbaarProduct;

class BeschikbaarProductController extends Controller
{
    public function store()
    {
        $attributes = request()->validate([
            'naam' => ['required', 'max:255'],
            'smaak' => ['max:255'],
            'volume' => ['max:255'],
        ]);

        $productdata = [
            'naam' => $attributes['naam'],
            'smaak' => $attributes['smaak'],
            'volume' => $attributes['volume']
        ];

        BeschikbaarProduct::create($productdata);

        return back()->with('success', 'Product toegevoegd!');
    }

    public function create()
    {
        $products = BeschikbaarProduct::all();

        return view('admin.product', compact('products'));
    }
}
