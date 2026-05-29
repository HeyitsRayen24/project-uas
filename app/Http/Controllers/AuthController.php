<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function showRegis()
    {
        return view('auth.register');
    }

    public function authenticate(Request $request)
    {
        $validation = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($validation))
        {
            $request->session()->regenerate();

            Alert::success('SELAMAT', 'Anda Berhasil Login');
            return redirect()->route('dashboard');
        }
        return back()->withErrors([
            'email' => 'Email/Password Anda Salah!'
        ])->onlyInput('email');
    }

    public function regis(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:3'
        ]);

        User::create($data);  

        Alert::success('SELAMAT', 'Anda Berhasil Regis')->autoClose(1000);
        return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Alert::success('SELAMAT', 'Anda Berhasil Logout');
        return redirect('/');
    }
}
