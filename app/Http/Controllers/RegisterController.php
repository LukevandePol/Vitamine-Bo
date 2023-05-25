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
            'kvknummer' => ['required', 'min:8', 'max:8'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'telefoon' => ['required'],
            'postcode' => ['required', 'min:6', 'max:7'],
            'huisnummer' => ['required'],
        ]);
//
//        $usergegevens = [
//            'name' => $attributes['name'],
//            'password' => bcrypt($attributes['password']),
//            'email' => $attributes['email']
//        ];
        $user = User::create([
            'name' => $attributes['name'],
            'password' => bcrypt($attributes['password']),
            'email' => $attributes['email']
        ]);

//        $klantgegevens = ;
        $klantgegevens = Klantgegevens::create([
            'kvkNummer' => $attributes['kvknummer'],
            'telefoonnummer' => $attributes['telefoon'],
            'user_id' => $user->id
        ]);
//
//        $adresgegevens = [
//            'postcode' => $attributes['postcode'],
//            'huisnummer' => $attributes['huisnummer'],
//            'klantgegevens_id' => $klantgegevens->id
//        ];


        $georegisterData = NationaalGeoregisterController::getData($attributes['postcode']);


        Adres::create([
            'postcode' => $attributes['postcode'],
            'huisnummer' => $attributes['huisnummer'],
            'adres' => $georegisterData['straatnaam'],
            'provincienaam' => $georegisterData['provincienaam'],
            'plaatsnaam' => $georegisterData['woonplaatsnaam'],
            'gemeentenaam' => $georegisterData['gemeentenaam'],
            'klantgegevens_id' => $klantgegevens->id,
            'type' => 'bezorg'
        ]);

        auth()->login($user);

        return redirect('/');
    }
}
