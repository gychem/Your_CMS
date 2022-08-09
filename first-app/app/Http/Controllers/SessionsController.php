<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

    public function create() 
    {
        return view('sessions.create');
    }

    public function store() 
    {
        $rules = [
            'email' => ['required', 'email'],
            'password' => ['required']
        ];

        $attributes = request()->validate($rules);

        //auth success
        if(auth()->attempt($attributes)) { 
            session()->regenerate(); // for security

            return redirect('/')->with('success', 'Welcome Back!');
        } 

        //auth failed
        return back()
                ->withInput()
                ->withErrors(['email' => 'Your provided credentials could not be verified.']); 
    }

    public function destroy() 
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye');
    }
}
