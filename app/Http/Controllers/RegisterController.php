<?php

namespace App\Http\Controllers;

use App\Models\Adres;
use App\Models\Klantgegevens;
use App\Models\User;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function create(): view
    {
        return view('auth.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'max:255'],
            'password' => ['required', 'min:8', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'postcode' => ['required', 'min:6', 'max:7'],
            'huisnummer' => ['required'],
            'kvknummer' => ['required', 'min:8', 'max:8'],
            'telefoon' => ['required'],
        ]);

        $user = User::create([
            'name' => $attributes['name'],
            'password' => bcrypt($attributes['password']),
            'email' => $attributes['email'],
            'telefoon' => $attributes['telefoon'],
            'kvk_nummer' => $attributes['kvknummer'],
        ]);

        $georegisterData = NationaalGeoregisterController::getData($attributes['postcode']);

        Adres::create([
            'postcode' => $attributes['postcode'],
            'huisnummer' => $attributes['huisnummer'],

            'weergavenaam' => $georegisterData['weergavenaam'],
            'straatnaam' => $georegisterData['straatnaam'],
            'woonplaatsnaam' => $georegisterData['woonplaatsnaam'],
            'provincienaam' => $georegisterData['provincienaam'],

            'user_id' => $user->id,
            'voorkeur_type' => 'bezorg'
        ]);

        auth()->login($user);

        return redirect('/');
    }
}
