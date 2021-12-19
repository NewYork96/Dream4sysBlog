<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
        /**
     * Show the form for logging in.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $user = Auth::user();

        return view('login', [
            'user' => $user
        ]);
    }

     /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('post')->with('welcome', 'Welcome!');
        }

        return back()->with('failLogin', 'Login failed!');
    }
}
