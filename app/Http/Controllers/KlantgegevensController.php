<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class KlantgegevensController extends Controller
{

    public function updateTelefoon()
    {
        $attributes = request()->validate([
            'telefoonnummer' => ['required', 'max:255']
        ]);

        DB::table('klantgegevens')
            ->where('user_id', auth()->id())
            ->update(['telefoonnummer' => $attributes['telefoonnummer']]);

        return redirect('/account');
    }

}
