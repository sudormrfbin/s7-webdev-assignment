<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        $attributes = request()->validate([
            'role' => 'in:employer,freelancer',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = [
            'email' => $attributes['email'],
            'password' => $attributes['password']
        ];

        if (!auth($attributes['role'])->attempt($credentials)) {
            throw ValidationException::withMessages([
                'password' => 'Your provided credentials could not be verified.'
            ]);
        }

        session()->regenerate();

        return redirect('/')->with('success', 'Welcome Back!');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
