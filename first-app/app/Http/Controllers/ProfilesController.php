<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $profile = Profile::all()->where('username', '=', $user);
        return view('profile.index')->with('profile', $profile);
    }
}
