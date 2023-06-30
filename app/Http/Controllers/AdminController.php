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
        $users = User::whereNull('status')->orderBy('id', 'asc');
        $users = $users->paginate(20);

        return view('admin.goedkeuren', compact('users'));
    }

    public function product()
    {
        return view('admin.product');
    }
}
