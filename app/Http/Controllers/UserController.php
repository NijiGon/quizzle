<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function show(){
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
        ]);

        $user = auth()->user();

        if ($user->password) {
            if (!Hash::check($validatedData['password'], $user->password)) {
                return redirect()->back()->withErrors(['password' => 'Incorrect password'])->withInput();
            } else {
                $user->update([
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                ]);
            }
        } else {
            $user->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
            ]);
        }
        return redirect()->route('profile');
    }
}
