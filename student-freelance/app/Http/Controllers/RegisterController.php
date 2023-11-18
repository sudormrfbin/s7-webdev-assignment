<?php

namespace App\Http\Controllers;

use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'role' => 'in:employer,freelancer',
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:7|max:255',
        ]);

        $user = User::create([
            'name' => $attributes['name'],
            'username' => $attributes['username'],
            'email' => $attributes['email'],
            'role' => $attributes['role'],
            'password' => bcrypt($attributes['password']),
        ]);

        auth()->login($user);

        return redirect('/')->with('success', 'Your account has been created.');
    }
}
