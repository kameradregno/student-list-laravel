<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('student');
        } else {
            return view('auth.login');
        }
        
    }

    public function authenticate(Request $request)
    {
        $credential = $request->only('email', 'password');

        if (Auth::attempt($credential)) {
            return redirect('student');
        } else {
            return redirect('login')->with('error_alert', 'Email atau password salah');
        }
    }

    public function logout()
    {

        Session::flush();
        Auth::logout();

        return redirect('login')->with('alert_msg', 'Anda sudah logout, silahkan login kembali');

    }

    public function register_form()
    {

        if (Auth::check()) {
            return redirect('student');
        } else {
            return view('auth.register');
        }
        

    }

    public function register(Request $request)
    {

        $request->validate([
            'name' => 'min:3|max:20',
            'email' => 'email|unique:users',
            'password' => 'min:3|max:16|confirmed'
        ]);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);

        return redirect('login');


    }
}
