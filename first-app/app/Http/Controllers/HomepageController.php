<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

class HomepageController extends Controller
{
    public function index() 
    {
        $users = Profile::orderBy('id', 'desc')->limit(5)->get();
        return view('homepage')->with('users', $users);
    }
}
