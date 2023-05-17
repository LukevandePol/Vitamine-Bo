<?php

namespace App\Http\Controllers;

use App\Models\Adres;

class DashboardController extends Controller
{
    public function create()
    {
        $user = auth()->user();
        $bezorgAdres = Adres::findOrFail($user->klantgegevens->bezorgAdres);
        $factuurAdres = Adres::find($user->klantgegevens->factuurAdres);

        return view('dashboard', [
            'user' => $user,
            'bezorgAdres' => $bezorgAdres,
            'factuurAdres' => $factuurAdres,
        ]);
    }
}
