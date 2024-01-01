<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('signin');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request -> has('remember'))) {
            // Jika autentikasi berhasil, alihkan pengguna ke halaman yang diinginkan
            return redirect('/home');
        }

        // Jika autentikasi gagal, kembalikan ke halaman login dengan pesan error
        return redirect()->back()->withErrors([
            'email' => 'Email atau password yang Anda masukkan salah.',
        ]);
    }

    public function logout()
    {
        Auth::logout();

        // Setelah logout, alihkan pengguna ke halaman login
        return redirect('/');
    }
}
