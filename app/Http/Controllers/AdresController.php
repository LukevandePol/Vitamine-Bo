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

    public function updateAdres($id)
    {

        $attributes = request()->validate([
            'postcode' => ['required', 'max:255'],
            'adres' => ['required', 'max:255'],
        ]);

        DB::table('adres')
            ->where('id', $id)
            ->update([
                'postcode' => $attributes['postcode'],
                'adres' => $attributes['adres']
            ]);

        return redirect('/account');
    }
}
