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
//            'plaatsnaam' => ['required'],
            'klantgegevens_id' => ['required'],
        ]);

        DB::table('adres')->insert([
            'postcode' => $attributes['postcode'],
            'huisnummer' => $attributes['huisnummer'],
//            'plaatsnaam' => $attributes['plaatsnaam'],
            'klantgegevens_id' => $attributes['klantgegevens_id'],
        ]);


        return redirect('/account');
    }

    public function updateAdres($id)
    {

        $attributes = request()->validate([
            'postcode' => ['required', 'min:6', 'max:7'],
            'huisnummer' => ['required', 'max:255'],
            'plaatsnaam' => ['required']
        ]);

        DB::table('adres')
            ->where('id', $id)
            ->update([
                'postcode' => $attributes['postcode'],
                'huisnummer' => $attributes['huisnummer'],
                'plaatsnaam' => $attributes['plaatsnaam'],
            ]);

        return redirect('/account');
    }

    public function deleteAdres($id)
    {
        DB::table('adres')->where('id', '=', $id)->delete();

        return redirect('/account');
    }
}
