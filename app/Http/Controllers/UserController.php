<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function show(){
        // $user = auth()->user;
        return view('profile');
    }
    
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|max:255',
            // Add more fields if needed
        ]);

        // Check if the provided password matches the user's current password
        if (!Hash::check($validatedData['password'], auth()->user()->password)) {
            return redirect()->back()->withErrors(['password' => 'Incorrect password'])->withInput();
        }

        // Update the user's profile
        auth()->user()->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);

        return redirect()->route('profile');
    }

}
