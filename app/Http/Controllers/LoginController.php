<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function auth(Request $request){

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($data)) {
            return redirect('dashboard');
        } else {
            return redirect('/')->with('error', 'email / password SALAH');
        }

    }

    public function logout(Request $request){

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
