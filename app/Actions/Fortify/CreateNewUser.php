<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'username' => ['required', 'string', 'max:20'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            'fullname' => ['required', 'string', 'max:50'],
            'tanggal_lahir',
            'jenis_kelamin',
            'no_telepon',
            'foto',
            'status',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'fullname' => $input['fullname'],
            'tanggal_lahir' => $input['tanggal_lahir'],
            'jenis_kelamin' => $input['jenis_kelamin'],
            'no_telepon' => $input['no_telepon'],
            'foto' => $input['foto'],
            'status' => $input['status'],
        ]);
    }
}
