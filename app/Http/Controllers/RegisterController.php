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
            'name' => 'required|max:255',
            'password' => 'required|min:8|max:255',
            'kvknummer' => 'required|min:8|max:8',
            'adres' => 'required',
            'telefoon' => 'required',
            'postcode' => 'required',
            'email' => 'required|email|max:255' ##misschien nog |unique:users toevoegen
        ]);

        $usergegevens = [
            'name' => $attributes['name'],
            'password' => bcrypt($attributes['password']),
            'email' => $attributes['email']
        ];
        $user = User::create($usergegevens); // !

        $klantgegevens = [
            'kvkNummer' => $attributes['kvknummer'],
            'telefoonnummer' => $attributes['telefoon'],
            'user_id' => $user->id
        ];
        $klantgegevens = Klantgegevens::create($klantgegevens);

        $adresgegevens = [
            'postcode' => $attributes['postcode'],
            'adres' => $attributes['adres'],
            'klantgegevens_id' => $klantgegevens->id
        ];
        Adres::create($adresgegevens);

        auth()->login($user);

        return redirect('/');
    }
}
