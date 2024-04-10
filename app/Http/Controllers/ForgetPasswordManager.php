<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ForgetPasswordManager extends Controller
{
    public function index()
    {
        return view('forgetpassword');
    }

    // validating email and looking in the database if the user exist
    public function store(Request $request)
    {

        $this->validate($request, [

            'email' => 'required|email|exists:users',
        ]);

        // generating a token
        $token = Str::random(64);

        // store the token
        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);
// sending email to the user for password reset
        Mail::send(
            'emails.forgetpassword',
            ['token' => $token],
            function ($message) use ($request) {
                $message->to($request->email);
                $message->subject('Reset Password');
            }
        );
        return redirect()->to('forgot.password')->with('success', 'We have sent a reset link to you email');
    }

    public function resetpassword($token)
    {
        return view('newpassword', compact('token'));
    }

    public function resetpasswordPost(Request $request)
    {
        // validating if users are in the DB
        $this->validate($request, [
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        // Requesting users details
        $updatePassword = DB::table('password_resets')
            ->where([
                'email' => $request->email,
                'token' => $request->token
            ])->first();

        // if the user has not submited anything, they get redirected
        if (!$updatePassword) {
            return redirect()->to(route('reset.password'))->with('error', 'Invalid');
        }

        // if the users data is present, the user resets the password
        User::where('email', $request->email)->update(['password' => Hash::make($request->password)]);

        // After reseting the password, the reset_password table gets deleted
        DB::table('password_resets')->where([
            'email' =>$request->email
        ])->delete();

        return redirect()->to(route('login'))->with('success', 'password reset was successful');
    }
}

