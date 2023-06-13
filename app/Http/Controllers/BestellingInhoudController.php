<?php

namespace App\Http\Controllers;

use App\Models\Bestelling;
use App\Models\Selectie;
use Illuminate\Support\Facades\DB;

class BestellingInhoudController extends Controller
{
    public function standaardToevoegenAanBestelling()
    {
        $attributes = \request()->validate([
            'selectie_id' => ['required']
        ]);

//        dd($attributes['selectie_id']);
        try {
            $bestelling = Bestelling::firstOrCreate([
                'user_id' => auth()->id(),
                'bezorgadres_id' => auth()->user()->adres->where('voorkeur_type', 'bezorg')->first()->id,
                'factuuradres_id' => auth()->user()->adres->where('voorkeur_type', 'factuur')->first()->id,
            ]);
        } catch (\Exception $e) {
            $bestelling = Bestelling::firstOrCreate([
                'user_id' => auth()->id(),
                'bezorgadres_id' => auth()->user()->adres->where('voorkeur_type', 'bezorg')->first()->id,
            ]);
        }
//        dd($bestelling);
        $standaardSelectie = Selectie::find($attributes['selectie_id']);

        $nieuweSelectie = Selectie::create([
            'product_id' => $standaardSelectie->product_id,
        ]);

        DB::table('bestelling_selectie')
            ->insert([
                'bestelling_id' => $bestelling->id,
                'selectie_id' => $nieuweSelectie->id,
                'aantal' => 1
            ]);

        $product_selectie = DB::table('product_selectie')
            ->where('selectie_id', $standaardSelectie->id)
            ->get();

        foreach ($product_selectie as $ps) {
            DB::table('product_selectie')
                ->insert([
                    'selectie_id' => $nieuweSelectie->id,
                    'product_id' => $ps->product_id,
                    'aantal' => $ps->aantal,
                ]);
        }

        return back()->with('succes', 'dit ging goed');
    }

    public function deleteSelectieUitBestelling()
    {
        try {
            $attributes = request()->validate([
                'selectie_id' => ['required'],
                'bestelling_id' => ['required']
            ]);

            //verwijder bestelling_selectie
            DB::table('bestelling_selectie')
                ->where('selectie_id', $attributes['selectie_id'])
                ->where('bestelling_id', $attributes['bestelling_id'])
                ->delete();

            //verwijder product_selectie
            DB::table('product_selectie')
                ->where('selectie_id', $attributes['selectie_id'])
                ->delete();

            //verwijder selectie
            DB::table('selecties')
                ->where('id', $attributes['selectie_id'])
                ->delete();

            return back()->with('success', 'Item succesvol verwijderd uit bestelling');
        } catch (\Exception $e) {
            return back()->with('error', 'Kon item niet verwijderen uit bestelling');
        }
    }
}
