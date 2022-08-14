<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $profile = Profile::where('username', '=', $user)->get();
        return view('profile.index')->with('profile', $profile);
    }
}
