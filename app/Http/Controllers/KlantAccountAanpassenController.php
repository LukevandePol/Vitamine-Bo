<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class KlantAccountAanpassenController extends Controller
{
    public function create()
    {
        return view('account.blade');
    }

    public function emailAanpassen()
    {
        $attributes = request()->validate([
            'email' => 'email'
        ]);

        DB::table('users')
            ->where('id', 3)
            ->update(['email' => 'test@example.com']);

        return redirect('/account');
    }
}
