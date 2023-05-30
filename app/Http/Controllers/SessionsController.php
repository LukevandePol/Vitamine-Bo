<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt($attributes)) {
            session()->regenerate();

            if (auth()->user()->rol == 'administrator' or auth()->user()->rol == 'bo_medewerker') {
                return redirect('/admin');
            } else {
                return redirect('/dashboard');
            }
        }

        throw ValidationException::withMessages([
            'email' => 'Uw heeft een onjuist e-mailadres ingevuld.'
        ]);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/');
    }
}
