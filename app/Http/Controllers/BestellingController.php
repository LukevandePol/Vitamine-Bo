<?php

namespace App\Http\Controllers;

use App\Models\Adres;
use App\Models\Bestelling;
use App\Models\Selectie;
use Illuminate\Support\Facades\DB;
use PHPUnit\Exception;

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
        $aangepasteBestellingen = Bestelling::whereNull('controle_datum')
            ->get();

        return view('admin.bestellingGoedkeuren', [
            'aangepasteBestellingen' => $aangepasteBestellingen,
        ]);
    }

    public function createBestellingBekijken($id)
    {
        $aangepasteBestelling = DB::table('bestellings')
            ->where('id', '=', $id)
            ->join('bestelling_selectie', 'bestellings.id', '=', 'bestelling_selectie.bestelling_id')
            ->get();

        try {
            $bezorgadres = Adres::where('id', '=', $aangepasteBestelling[0]->bezorgadres_id)->get()[0];
        } catch (\Exception $e) {
            return back()->with('error', 'Bestelling heeft geen bezorgadres');
        }

        if ($aangepasteBestelling[0]->factuuradres_id !== null) {
            $factuuradres = Adres::where('id', '=', $aangepasteBestelling[0]->factuuradres_id)->get()[0];
        } else {
            $factuuradres = null;
        }

        return view('admin.bestellingBekijken', [
            'aangepasteBestelling' => $aangepasteBestelling,
            'bezorgadres' => $bezorgadres,
            'factuuradres' => $factuuradres
        ]);
    }

    public function BestellingGoedkeuren()
    {
        try {
            $attributes = request()->validate([
                'bestelling_id' => ['required'],
                'prijs_in_centen' => ['required', 'integer'],
                'reden' => ['required']
            ]);

            $bestelling = Bestelling::find($attributes['bestelling_id']);

            $bestelling->prijs_in_centen = $attributes['prijs_in_centen'];
            $bestelling->reden = $attributes['reden'];
            $bestelling->controle_datum = now()->toDateTime();

            $bestelling->save();

        } catch (Exception $e) {
            return back()->with('error', 'oeps er ging iets mis');
        }
        return redirect('/admin/BestellingGoedkeuren')->with('success', 'Bestelling goedgekeurd');
    }
}
