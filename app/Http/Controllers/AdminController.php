<?php

namespace App\Http\Controllers;

use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function approve()
    {
        $users = User::whereNull('status');
        $users = $users->paginate(20);

        return view('admin.goedkeuren', compact('users'));
    }

    public function update($id)
    {
        $user = User::findOrFail($id);

        $user->status = now();
        $user->save();

        return redirect()->back()->with('success', 'Account succesvol goedgekeurd!');
    }

    public function product()
    {
        return view('admin.product');
    }
}
