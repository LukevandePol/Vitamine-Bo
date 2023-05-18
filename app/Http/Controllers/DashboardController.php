<?php

namespace App\Http\Controllers;

use App\Models\Adres;

class DashboardController extends Controller
{
    public function create()
    {
        $user = auth()->user();
        $klantgegevens_id = $user->klantgegevens->id;

        $bezorgadres = Adres::query()
            ->where('klantgegevens_id', '=', $klantgegevens_id)
            ->where('type', '=', 'bezorg')
            ->get()
            ->get(0);

        return view('dashboard', [
            'user' => $user,
            'adres' => $bezorgadres,
        ]);
    }
}
