<?php

namespace App\Http\Controllers;

use App\Models\Bestelling;
use App\Models\Selectie;

class BestellingController extends Controller
{
    public function create()
    {
        $laatsteBestelling = Bestelling::where('user_id', '=', auth()->user()->id)
            ->latest()
            ->first();

//        $selecteerbareProducten_id = DB::table('bestelling_selectie')
//            ->whereNull('bestelling_id')
//            ->pluck('selectie_id');
//
//        $selecteerbareProducten = DB::table('selecties')
//            ->where('id', '=', $selecteerbareProducten_id)
//            ->get();
        $standaardSelecties = Selectie::where('is_standaard', true)
            ->where('is_zichtbaar', true)
            ->get();
//        $selecteerbareProducten = Product::all();
//        dd($selecteerbareProducten);

        //wat als een klant nog geen bestelling heeft?
        return view('bestellingBewerken', [
                'bestelling' => $laatsteBestelling,
                'standaardSelecties' => $standaardSelecties,
            ]
        );
    }
}
