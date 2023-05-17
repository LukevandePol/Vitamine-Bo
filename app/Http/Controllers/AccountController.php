<?php

namespace App\Http\Controllers;

use App\Models\Adres;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function create()
    {
        $user = auth()->user();
        $klantgegevens = $user->klantgegevens;
        $bezorgAdres = Adres::find($klantgegevens->bezorgAdres);
        $factuurAdres = Adres::find($klantgegevens->factuurAdres);

        return view('account', [
                'user' => $user,
                'klantgegevens' => $klantgegevens,
                'factuurAdres' => $bezorgAdres,
                'bezorgAdres' => $factuurAdres,
            ]
        );
    }

    public function updateUser()
    {
        $attributes = request()->validate([
            'email' => ['required', 'email', 'max:255'],
            'naam' => ['required', 'max:255'],
        ]);

        DB::table('users')
            ->where('id', auth()->id())
            ->update([
                'email' => $attributes['email'],
                'name' => $attributes['naam']
            ]);

        return redirect('/account');
    }

}
