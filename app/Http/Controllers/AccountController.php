<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function create()
    {
        return view('account',
            ['user' => auth()->user()],
        );
    }

    public function updateAccount()
    {
        $attributes = request()->validate([
            'email' => ['required', 'email', 'max:255'],
            'naam' => ['required', 'max:255'],
        ]);

        DB::table('users')
            ->where('id', auth()->id())
            ->update([
                'email' => $attributes['email'],
                'name' => $attributes['naam']
            ]);

        return redirect('/account');
    }

}
