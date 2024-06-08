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
            'Email' => 'required',
            'Password' => 'required'
        ]);

        if (auth()->attempt(['email' => $formFields['Email'], 'password' => $formFields['Password']])) {
            $request->session()->regenerate();
            return redirect('/')->with('success', 'Loged in successfully!!');
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
