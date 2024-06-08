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


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
