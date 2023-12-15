<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // $tanggal_lahir = 'tanggal_lahir' === null;
        // $jenis_kelamin = 'jenis_kelamin' === null;
        // $no_telepon = 'no_telepon' === null;
        // $foto = 'foto' === null;
        // $status = 'status' === null;
        // dd($request);

        $request->validate([
            'fullname' => ['required', 'string', 'max:50'],
            'username' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'tanggal_lahir',
            'jenis_kelamin',
            'no_telepon',
            'foto',
            'status',
        ]);

        $user = User::create([
            'fullname' => $request->fullname,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_telepon' => $request->no_telepon,
            'foto' => $request->foto,
            'status' => $request->status,
        ]);

        if (!$user) {
            // Log or handle the error appropriately
            return redirect()->back()->withInput()->withErrors(['error' => 'User creation failed']);
        }


        event(new Registered($user));

        // Auth::login($user);

        return view('login');
    }
}
