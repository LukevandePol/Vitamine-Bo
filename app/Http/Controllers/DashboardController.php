<?php

namespace App\Http\Controllers;

use App\Models\Adres;

class DashboardController extends Controller
{
    public function create()
    {
        $user = auth()->user();

        $bezorgadres = Adres::where('user_id', auth()->user()->id)
            ->where('voorkeur_type', 'bezorg')
            ->first();

        return view('dashboard', [
            'user' => $user,
            'bezorgadres' => $bezorgadres,
        ]);
    }
}
