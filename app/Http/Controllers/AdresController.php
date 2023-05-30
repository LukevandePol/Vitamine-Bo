<?php

namespace App\Http\Controllers;

use App\Models\Adres;
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
        return view('AdresToevoegen');
    }

    public function createAdres()
    {
        $attributes = request()->validate([
            'postcode' => ['required', 'min:6', 'max:7'],
            'huisnummer' => ['required', 'max:255'],
            'user_id' => ['required'],
        ]);

        $georegisterData = NationaalGeoregisterController::getData($attributes['postcode']);

        $adres = [
            'postcode' => $attributes['postcode'],
            'huisnummer' => $attributes['huisnummer'],
            'weergavenaam' => null,
            'straatnaam' => null,
            'woonplaatsnaam' => null,
            'provincienaam' => null,
            'user_id' => $attributes['user_id'],
            'voorkeur_type' => 'factuur'
        ];

        if ($georegisterData['weergavenaam'] !== null) {
            $adres['weergavenaam'] = $georegisterData['weergavenaam'];
        }
        if ($georegisterData['straatnaam'] !== null) {
            $adres['straatnaam'] = $georegisterData['straatnaam'];
        }
        if ($georegisterData['woonplaatsnaam'] !== null) {
            $adres['woonplaatsnaam'] = $georegisterData['woonplaatsnaam'];
        }
        if ($georegisterData['provincienaam'] !== null) {
            $adres['provincienaam'] = $georegisterData['provincienaam'];
        }

        Adres::create($adres);

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
                'weergavenaam' => $georegisterData['weergavenaam'],
                'straatnaam' => $georegisterData['straatnaam'],
                'woonplaatsnaam' => $georegisterData['woonplaatsnaam'],
                'provincienaam' => $georegisterData['provincienaam'],
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
