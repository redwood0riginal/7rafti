<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class clientController extends Controller
{

    public function registerForm()
    {
        return view('auth.registerClient');
    }
    public function register(Request $request)
    {
        $formFields = $request->validate([
            'nom' => ['required'],
            'prenom' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:8', 'confirmed'],
            'ville' => ['required'],
            'phone' => ['required'],
        ]);

        $formFields['password'] = bcrypt($formFields['password']);
        $formFields['role'] = 'client';

        $user = User::create($formFields);
        auth()->login($user);
        return redirect('/')->with('success', 'user successfully created');
    }
}
