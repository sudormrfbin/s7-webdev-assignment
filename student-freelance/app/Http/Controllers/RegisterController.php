<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Freelancer;

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

        if ($attributes['role'] == 'freelancer') {
            $user = Freelancer::create([
                'name' => $attributes['name'],
                'username' => $attributes['username'],
                'email' => $attributes['email'],
                'password' => bcrypt($attributes['password']),
            ]);
        } else {
            $user = Employer::create([
                'name' => $attributes['name'],
                'username' => $attributes['username'],
                'email' => $attributes['email'],
                'password' => $attributes['password'],
            ]);
        }

        auth()->login($user);

        return redirect('/')->with('success', 'Your account has been created.');
    }
}
