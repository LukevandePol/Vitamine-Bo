<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class KlantAccountAanpassenController extends Controller
{
    public function create()
    {
        return view('account.blade');
    }

    public function updateEmail()
    {
        $attributes = request()->validate([
            'email' => ['required', 'email', 'max:255']
        ]);

        DB::table('users')
            ->where('id', auth()->id())
            ->update(['email' => $attributes['email']]);

        return redirect('/account');

    }

    public function updateNaam()
    {
        $attributes = request()->validate([
            'naam' => ['required', 'max:255']
        ]);

        DB::table('users')
            ->where('id', auth()->id())
            ->update(['name' => $attributes['naam']]);

        return redirect('/account');

    }
}
