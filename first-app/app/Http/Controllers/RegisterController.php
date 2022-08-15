<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use App\Models\User;
use App\Models\Profile;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store() 
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

        $user = User::create($attributes);
        auth()->login($user);
 
        $profile = Profile::create([
            'username' => $user->username,
            'title' => 'title comes here.',
            'body' => 'body',
            'user_id' => auth()->user()->id,
            'image' => '/images/profiles/default.png',
            'header-image' => '/images/profiles/default-header.png'
        ]);

        return redirect('/')->with('success', 'Your account has been created.');
    }
}
