<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credintials = $this->validate($request,
        [
            'email' => 'required|email|min:10|max:140',
            'password' => 'required|min:6'
        ]
        );

        if(Auth::attempt($credintials)){
            
            $request->session()->regenerate();
            return redirect('/dashboard');
        }

        return back()->withErrors([
         'email' => 'The provided credentials do not match our records.'
        ])
    
}
}