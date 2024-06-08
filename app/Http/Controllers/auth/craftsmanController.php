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


    public function craftsmanProfile(){
        return view('craftsman.profile');
    }

    public function updateForm(){
        return view('craftsman.update');
    }



    public function update(Request $request, User $user)
    {
        // Validate the request data
        $formFields = $request->validate([
            'nom' => '',
            'prenom' => '',
            'email' => '',
            'phone' => '',
            'description' => 'max:255',
            'birthdate' => '',
            'gender' => 'in:male,female',
            'address' => 'max:255',
            'service' => '',
            'metier' => '',
        ]);

        $formFields['role'] = 'craftsman';


        // Handle Profile Image
        if ($request->hasFile('profile')) {
            $request->validate([
                'profile' => 'image|mimes:jpeg,png,jpg|max:8000',
            ]);

            // Generate a unique filename for the profile image
            $profileName = $user->id . '-' . uniqid() . '.' . $request->file('profile')->getClientOriginalExtension();

            // Store the profile image
            $request->file('profile')->storeAs('public/profileImages', $profileName);

            $user->profile = $profileName;
        }

        // Update user profile

        $user->update($formFields);

        return redirect()->route('profile.show',$user->id)->with('success', 'Profile successfully updated');
    }
}


