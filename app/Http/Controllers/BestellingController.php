<?php

namespace App\Http\Controllers;

use App\Models\BeschikbaarProduct;
use App\Models\Bestelling;

class BestellingController extends Controller
{
    public function create()
    {
        $user = auth()->user();

        $laatsteBestelling = Bestelling::where('user_id', '=', $user->id)
            ->latest()
            ->first();

        //wat als een klant nog geen bestelling heeft?
        return view('bestellingBewerken', [
                'bestelling' => $laatsteBestelling,
            ]
        );
    }
}
