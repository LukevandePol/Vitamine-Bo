<?php

namespace App\Http\Controllers;

use App\Models\BeschikbaarProduct;
use App\Models\Bestelling;

class BestellingController extends Controller
{
    public function create()
    {
        //->where('zichtbaar', '=', 'true');
        $user = auth()->user();
        $klantgegevens = $user->klantgegevens;

        $bestelling = Bestelling::orderBy('bezorgDatum', 'desc')
            ->where('klantgegevens_id', '=', $klantgegevens->id)
            ->first();

        $beschikbareProducten = BeschikbaarProduct::all();
        return view('bestellingBewerken', [
            'beschikbareProducten' => $beschikbareProducten,
            'bestelling' => $bestelling,
        ]);
    }
}
