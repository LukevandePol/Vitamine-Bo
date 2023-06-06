<?php

namespace App\Http\Controllers;

use App\Mail\DeleteAccountNotification;
use App\Models\Adres;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class AccountController extends Controller
{
    public function create()
    {
        $adressen = Adres::all()
            ->where('user_id', '=', auth()->user()->id);

        return view('account', [
                'adressen' => $adressen
            ]
        );
    }

    public function updateUser()
    {
        $attributes = request()->validate([
            'email' => ['required', 'email', 'max:255'],
            'naam' => ['required', 'max:255'],
            'telefoon' => ['required', 'max:15'],
            'kvk_nummer' => ['required', 'max:10'],
        ]);

        DB::table('users')
            ->where('id', auth()->id())
            ->update([
                'email' => $attributes['email'],
                'name' => $attributes['naam'],
                'telefoon' => $attributes['telefoon'],
                'kvk_nummer' => $attributes['kvk_nummer'],
            ]);

        return redirect('/account');
    }

    public function approveAccount($id)
    {
        $user = User::findOrFail($id);

        $user->status = now();
        $user->save();

        return redirect()->back()->with('success', 'Account succesvol goedgekeurd!');
    }

    public function destroyAccount($id, Request $request)
    {
        $user = User::findOrFail($id);

        $reason = $request->input('reden');

        Mail::to($user->email)->send(new DeleteAccountNotification($user, $reason));

        $user->delete();

        return redirect()->back()->with('success', 'Account is succesvol verwijderd.');
    }
}
