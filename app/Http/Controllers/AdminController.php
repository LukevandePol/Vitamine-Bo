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

//    public function destroy($id)
//    {
//        // Delete the account
//        $user = User::find($id);
//
//        if ($user) {
//            // Delete the user
//            $user->delete();
//
//            return back()->with('success', 'Gebruiker is succesvol verwijderd.');
//        }
//
//        // Redirect the user or perform any other actions
//        return "User not found.";
//    }

//    public function destroy(Request $request, $id)
//    {
//        // Check if the confirmation was given
//        if ($request->has('confirmation') && $request->confirmation == 'true') {
//            // Delete the user
//            $user = User::find($id);
//
//            $user->delete();
//
//            return redirect()->route('users.index')->with('success', 'User deleted successfully.');
//        }
//
//        // Redirect back if no confirmation was given
//        return redirect()->back()->with('warning', 'User deletion cancelled.');
//    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'Account is succesvol verwijderd.');
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
