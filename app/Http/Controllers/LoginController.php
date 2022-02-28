<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function login(Request $request)
    {
        return view('auth/login');
    }

    public function authenticate(Request $request)
    {
        
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        

        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            $role=Auth::user()->role;

            if($role == 1){
                return redirect()->intended('/applications/index');
            }

            if ($role == 2){
                return redirect()->intended('/posts');
            }
            
        }
    
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

}