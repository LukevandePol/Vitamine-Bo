<?php

namespace App\Http\Controllers;

use App\Models\Adres;
use App\Models\Bestelling;

class DashboardController extends Controller
{
    public function create()
    {
        $user = auth()->user();

        $bezorgadres = Adres::where('user_id', auth()->user()->id)
            ->where('voorkeur_type', 'bezorg')
            ->first();

        $bestelling = Bestelling::where('user_id', auth()->user()->id)
            ->latest()
            ->first();

        return view('dashboard', [
            'user' => $user,
            'bezorgadres' => $bezorgadres,
            'bestelling' => $bestelling,
        ]);
    }
}
