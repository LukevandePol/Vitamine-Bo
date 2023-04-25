<?php

namespace App\Http\Controllers;

use App\Models\Klantgegevens;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
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
            'email' => 'required|email|max:255'
        ]);

        $attributes['password'] = bcrypt($attributes['password']);

        $usergegevens = [
            'name' => $attributes['name'],
            'password' => bcrypt($attributes['password']),
            'email' => $attributes['email']
        ];
        $user = User::create($usergegevens); // !

        $klantgegevens = [
            'kvkNummer'=> $attributes['kvknummer'],
            'telefoonnummer' => $attributes['telefoon'],
            'postcode'=> $attributes['postcode'],
            'adres' => $attributes['adres'],
            'user_id' => $user->id
        ];

        Klantgegevens::create($klantgegevens);

        auth()->login($user);

        return redirect('/');
    }
}
