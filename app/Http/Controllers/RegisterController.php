<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\User;


class RegisterController extends Controller
{


    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {

        // validating user
        $this->validate($request, [
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
        ]);

        // storing user's info
         User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // sign the user In
        auth()->attempt($request->only('email', 'password'));

        // redirectet the user after registrtaion
        return redirect()->route('home');
    }
}
