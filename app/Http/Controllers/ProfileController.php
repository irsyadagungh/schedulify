<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
        $userId = Auth::id();
        $user = User::findOrFail($userId);

        return view('profile',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
        $userId = Auth::id();

        $request->validate([
            'fullname' => 'required|max:50',
            'username' => [
                'required',
                'max:50',
                Rule::unique('users')->ignore($userId),
            ],
            'tanggal_lahir',
            'jenis_kelamin' => [
                Rule::in(['laki-laki', 'perempuan'])
            ],
            'no_telepon' => 'max:13',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($userId),
            ],
            // 'password' => 'required|min:8',
        ]);

        // Create a new user
        $user = User::findOrFail($userId);
        $user->fullname = $request->input('fullname');
        $user->username = $request->input('username');
        // $user->password = Hash::make($request->input('password'));
        $user->tanggal_lahir = $request->input('tanggal_lahir');
        $user->jenis_kelamin = $request->input('jenis_kelamin');
        $user->no_telepon= $request->input('no_telepon');

        // foto upload
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoPath = $foto->store('foto','public');
            $user->foto = $fotoPath;
        }

        $user->email = $request->input('email');

        $user->save();
        return redirect()->route('p')->with('success', 'Profile updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
