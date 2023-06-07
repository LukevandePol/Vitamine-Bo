<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Selectie;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();

        return view('admin.product', compact('products'));
    }

    public function createProductBewerken($id)
    {
        $product = Product::find($id);
        return view('admin.product-bewerken', [
            'product' => $product
        ]);
    }

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
            'type' => ['required'],
        ]);

        switch ($attributes['type']) {
            case 'fruit':
                return view('admin.fruit-toevoegen');
            case 'groente':
                return view('admin.groente-toevoegen');
            case 'fles':
                return view('admin.fles-toevoegen');
            case 'verpakking':
                return view('admin.verpakking-toevoegen');
        }
        return back()->with('success', 'Product toegevoegd!');
    }

    public function fruitToevoegen()
    {
        try {
            $attributes = request()->validate([
                'naam' => ['required', 'max:255'],
                'afbeelding' => []
            ]);
            try {
                Product::create([
                    'naam' => $attributes['naam'],
                    'type' => 'fruit',
                    'is_zichtbaar' => true,
                ]);
                return back()->with('success', 'Product Toegevoegd!');
            } catch (\Exception $e) {
                return back()->with('error', 'Product bestaat al!');
            }
        } catch (\Exception $e) {
            return back()->with('error', 'Oeps, er ging iets mis');
        }
    }

    public function groenteToevoegen()
    {
        try {
            $attributes = request()->validate([
                'naam' => ['required', 'max:255'],
                'afbeelding' => []
            ]);

            try {
                Product::create([
                    'naam' => $attributes['naam'],
                    'type' => 'groente',
                    'is_zichtbaar' => true,
                ]);
                return back()->with('success', 'Product Toegevoegd!');
            } catch (\Exception $e) {
                return back()->with('error', 'Product bestaat al!');
            }
        } catch (\Exception $e) {
            return back()->with('error', 'Oeps, er ging iets mis');
        }
    }

    public function flesToevoegen()
    {
        try {
            $attributes = request()->validate([
                'naam' => ['required', 'max:255'],
                'afbeelding' => [],
                'inhoud' => ['required', 'max:255'],
            ]);
            try {
                Product::create([
                    'naam' => $attributes['naam'],
                    'type' => 'fles',
                    'inhoud' => $attributes['inhoud'],
                    'is_zichtbaar' => true,
                ]);
                return back()->with('success', 'Product Toegevoegd!');
            } catch (\Exception $e) {
                return back()->with('error', 'Product bestaat al!');
            }
        } catch (\Exception $e) {
            return back()->with('error', 'Oeps, er ging iets mis');
        }
    }

    public function verpakkingToevoegen()
    {
        try {
            $attributes = request()->validate([
                'naam' => ['required', 'max:255'],
                'afbeelding' => []
            ]);

            try {
                $product = Product::create([
                    'naam' => $attributes['naam'],
                    'type' => 'verpakking',
                    'is_zichtbaar' => true,
                ]);

                $selectie = Selectie::create([
                    'product_id' => $product->id
                ]);

                return redirect('/admin/productInhoudBewerken/' . $product->id);
            } catch (\Exception $e) {
                return back()->with('error', 'Product bestaat al!');
            }
        } catch (\Exception $e) {
            return back()->with('error', 'Oeps, er ging iets mis!');
        }
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
