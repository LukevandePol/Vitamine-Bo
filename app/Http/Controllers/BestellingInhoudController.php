<?php

namespace App\Http\Controllers;

use App\Models\Bestelling;

class BestellingInhoudController extends Controller
{
    public function standaardToevoegenAanBestelling()
    {
        $attributes = \request()->validate([
            'product_id' => ['required']
        ]);

        dd($attributes);
//        try {
        $bestelling = Bestelling::firstOrCreate([
            'user_id' => auth()->id(),
            'bezorgadres_id' => auth()->user()->adres->where('voorkeur_type', 'bezorg')->first()->id,
            'factuuradres_id' => auth()->user()->adres->where('voorkeur_type', 'factuur')->first()->id,
        ]);
//        } catch (\Exception $e) {
////            return back()->with('error', 'iets k')
//        }
//
//        $standaardSelectie = DB::table('product_selectie')->
//            where()

        dd($bestelling);
        dd($attributes);
    }
}
