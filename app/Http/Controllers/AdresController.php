<?php

namespace App\Http\Controllers;

use App\Models\Adres;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdresController extends Controller
{

    public function create($id)
    {
        return view('AdresBewerken', [
                'adres' => Adres::find($id)
            ]
        );
    }

    public function createToevoegen()
    {
        return view('AdresToevoegen', [
                'klantgegevens' => Auth::user()->klantgegevens
            ]
        );
    }

    public function createAdres()
    {

        $attributes = request()->validate([
            'postcode' => ['required', 'min:6', 'max:7'],
            'huisnummer' => ['required', 'max:255'],
            'klantgegevens_id' => ['required'],
        ]);

        $georegisterData = NationaalGeoregisterController::getData($attributes['postcode']);


        Adres::create([
            'postcode' => $attributes['postcode'],
            'huisnummer' => $attributes['huisnummer'],
            'adres' => $georegisterData['straatnaam'],
            'provincienaam' => $georegisterData['provincienaam'],
            'plaatsnaam' => $georegisterData['woonplaatsnaam'],
            'gemeentenaam' => $georegisterData['gemeentenaam'],
            'klantgegevens_id' => $attributes['klantgegevens_id'],
        ]);


        return redirect('/account');
    }

    public function updateAdres($id)
    {

        $attributes = request()->validate([
            'postcode' => ['required', 'min:6', 'max:7'],
            'huisnummer' => ['required', 'max:255'],
        ]);

        $georegisterData = NationaalGeoregisterController::getData($attributes['postcode']);


        DB::table('adres')
            ->where('id', $id)
            ->update([
                'postcode' => $attributes['postcode'],
                'huisnummer' => $attributes['huisnummer'],
                'adres' => $georegisterData['straatnaam'],
                'provincienaam' => $georegisterData['provincienaam'],
                'plaatsnaam' => $georegisterData['woonplaatsnaam'],
                'gemeentenaam' => $georegisterData['gemeentenaam'],
            ]);

        return redirect('/account');
    }

    public function deleteAdres($id)
    {
        DB::table('adres')->where('id', '=', $id)->delete();

        return redirect('/account');
    }

    public function setBezorg($id)
    {
        $toekomstigBezorgadres =
            Adres::find($id);

        Adres::query()
            ->where('klantgegevens_id', '=', $toekomstigBezorgadres->klantgegevens_id)
            ->where('type', '=', 'bezorg')
            ->update(['type' => 'niet_gebruikt']);

        $toekomstigBezorgadres->type = 'bezorg';
        $toekomstigBezorgadres->save();

        return redirect('/account');
    }

    public function setFactuur($id)
    {
        $toekomstigFactuurgadres =
            Adres::find($id);

        Adres::query()
            ->where('klantgegevens_id', '=', $toekomstigFactuurgadres->klantgegevens_id)
            ->where('type', '=', 'factuur')
            ->update(['type' => 'niet_gebruikt']);

        $toekomstigFactuurgadres->type = 'factuur';
        $toekomstigFactuurgadres->save();

        return redirect('/account');
    }
}
