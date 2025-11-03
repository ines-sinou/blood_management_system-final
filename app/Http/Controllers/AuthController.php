<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('Authcustom.register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:50|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'phone' => 'nullable|string|max:20',
            'blood_type' => 'nullable|string',
            'gender' => 'required|string',
            'location' => 'nullable|string',
            'dob' => 'nullable|date',
            'last_donation' => 'nullable|date',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'blood_type' => $request->blood_type,
            'gender' => $request->gender,
            'location' => $request->location,
            'dob' => $request->dob,
            'last_donation' => $request->last_donation,
            'role' => 'donor', // Force role to donor
        ]);
           Auth::login($user);

        return redirect()->route('dashboard')->with('success', 'Welcome donor! Registration successful.');
    }
}
