<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function show(){
        // $user = auth()->user;
        if(!auth()->user()){
            return redirect()->route('login.page');
        }
        return view('profile');
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|max:255|min:8',
            // Add more fields if needed
        ]);

        // Check if the provided password matches the user's current password
        $user = auth()->user();

        if ($user->password) {
            // If the user doesn't have a password (might be an older user without Bcrypt hashing)
            if (!Hash::check($validatedData['password'], $user->password)) {
                return redirect()->back()->withErrors(['password' => 'Incorrect password'])->withInput();
            } else {
                $user->update([
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                ]);
            }
        } else {
            // If the user already has a password (hashed with Bcrypt)
            $user->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
            ]);
        }


        // Update the user's profile


        return redirect()->route('profile');
    }

}
