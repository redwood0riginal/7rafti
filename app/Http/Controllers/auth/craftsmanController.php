<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class craftsmanController extends Controller
{
    public function registerForm()
    {
        return view('auth.registerCraftsman');
    }


    public function register(Request $request)
    {
        $formFields = $request->validate([
            'nom' => ['required'],
            'prenom' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:8', 'confirmed'],
            'ville' => ['required'],
            'bio' => ['required'],
            'metier' => ['required'],
            'phone' => ['required'],
            'service' => ['required']
        ]);

        $formFields['password'] = bcrypt($formFields['password']);
        $formFields['role'] = 'craftsman';

        $user = User::create($formFields);
        auth()->login($user);
        return redirect('/')->with('success', 'user successfully created');
    }
}
