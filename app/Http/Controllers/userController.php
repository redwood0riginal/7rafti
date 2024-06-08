<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{

    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $formFields = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (auth()->attempt(['email' => $formFields['email'], 'password' => $formFields['password']])) {
            $request->session()->regenerate();
            if(auth()->user()->role == 'client'){
                return redirect()->route('besoins.create')->with('success', 'Loged in successfully!!');
            }
            if(auth()->user()->role == 'craftsman'){
                return redirect('/')->route('services.create')->with('success', 'Loged in successfully!!');
            }
        } else {
            return redirect('/login')->with('error', 'wrong email or password');
        }
    }


    public function logout(){
        if (auth()->check()){
            auth()->logout();
            return redirect('/')->with('success','Loged out successfully ');
        };
    }

}
