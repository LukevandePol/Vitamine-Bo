<?php

namespace App\Http\Controllers;

use App\Models\Adres;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function create()
    {
        $adressen = Adres::all()
            ->where('user_id', '=', auth()->user()->id);

        return view('account', [
                'adressen' => $adressen
            ]
        );
    }

    public function updateUser()
    {
        $attributes = request()->validate([
            'email' => ['required', 'email', 'max:255'],
            'naam' => ['required', 'max:255'],
            'telefoon' => ['required', 'max:15'],
            'kvk_nummer' => ['required', 'max:10'],
        ]);

        DB::table('users')
            ->where('id', auth()->id())
            ->update([
                'email' => $attributes['email'],
                'name' => $attributes['naam'],
                'telefoon' => $attributes['telefoon'],
                'kvk_nummer' => $attributes['kvk_nummer'],
            ]);

        return redirect('/account');
    }

}
