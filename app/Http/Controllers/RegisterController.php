<?php

namespace App\Http\Controllers;

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

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/');
    }
}