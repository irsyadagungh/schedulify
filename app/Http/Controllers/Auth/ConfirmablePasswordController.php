<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class ConfirmablePasswordController extends Controller
{
    /**
     * Show the confirm password view.
     */
    public function show(): View
    {
        return view('signIn');
    }

    /**
     * Confirm the user's password.
     */
    public function store(Request $request): RedirectResponse
    {
        // Ini sekalian sama fortify tadi tapi belom yakin
        // $credentials = $request->only('email', 'password', 'username');

        // if (Auth::attempt($credentials)) {
        //     return redirect('/home');
        // }

        // return back()->withErrors(['email' => 'Invalid credentials']);

        if (! Auth::guard('web')->validate([
            'username' => $request->user()->username,
            'email' => $request->user()->email,
            'password' => $request->password,
        ])) {
            throw ValidationException::withMessages([
                'password' => __('auth.password'),
            ]);
        }

        $request->session()->put('auth.password_confirmed_at', time());

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    public function logout()
    {
        Auth::logout();
        return redirect();
    }
}
