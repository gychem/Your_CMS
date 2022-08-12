<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create() // Load register 'create' view page
    {
        return view('register.create');
    }

    public function store() // Create the user
    {
        $rules = [
            'username' => ['required', 'min:3', 'max:255', Rule::unique('users', 'username')],
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')],
            'password' => ['required', 'min:7', 'max:255']
        ];

        
        $customMessages = [
            'required' => 'The :attribute field is required.'
        ];

        $attributes = request()->validate($rules, $customMessages);

        // $attributes['password'] = bcrypt($attributes['password']); // Encrypt password (automated in Models/User.php)

        $user = User::create($attributes);
        
        auth()->login($user);

        return redirect('/')->with('success', 'Your account has been created.');
    }
}
