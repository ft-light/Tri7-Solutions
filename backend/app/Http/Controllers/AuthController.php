<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $user = $request->validate([
            'username' => 'required',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($user)) {
            $request->session()->regenerate();

            return redirect()->intended('employee-list');
        }
   
        return redirect('login')->with('error','The credentials you provided do not match our records.');
    }

    public function logout(Request $request) {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
