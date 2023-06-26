<?php

namespace App\Http\Controllers;

use App\Models\Bestelling;
use App\Models\Selectie;

class BestellingController extends Controller
{
    public function create()
    {
        $laatsteBestelling = Bestelling::where('user_id', '=', auth()->user()->id)
            ->latest()  // haalt de items met de laatste 'created_at' datum
            ->first(); // pak het eerste item van de lijst

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

        return view('bestellingBewerken', [
                'bestelling' => $laatsteBestelling,
                'standaardSelecties' => $standaardSelecties,
            ]
        );
    }

    public function createBestellingenGoedkeuren()
    {
        $aangepasteBestellingen = Bestelling::where('controle_datum', '=', null)
            ->get();

        return view('bestellingGoedkeuren', [
            'aangepasteBestellingen' => $aangepasteBestellingen,
        ]);
    }
}
