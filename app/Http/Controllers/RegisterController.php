<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        $status = "";
        return view('register',compact('status'));
    }

    public function register(Request $request)
    {
        try {
            $request->validate([
                'fullname' => 'required|max:50',
                'username' => 'required|max:50|unique:users',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:8',
            ]);

            // Create a new user
            $user = new User();
            $user->fullname = $request->input('fullname');
            $user->username = $request->input('username');
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('password'));

            $user->save();

            $status = 'Registration successful! Please log in.';
            return redirect()->route('ls')->with('status', $status);
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[2];

            if ($errorCode == 1062) { // Duplicate entry error code
                $status = '';

                if (str_contains($e->getMessage(), 'users_email_unique')) {
                    $status = 'Email is already Registered. Please choose a different one.';
                } elseif (str_contains($e->getMessage(), 'users_username_unique')) {
                    $status = 'Username is already taken. Please choose a different one.';
                }

                return view('register', compact('status'));
            }

            // Handle other query exceptions if needed

            // Rethrow the exception if it's not a duplicate entry error
            throw $e;
        }
    }
}
