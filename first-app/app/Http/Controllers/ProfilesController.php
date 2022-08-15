<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\Profile;
use App\Models\User;

class ProfilesController extends Controller
{
    public function index(Profile $profile)
    {
        return view('profile.index')->with('profile', $profile);
    }

    public function edit(Profile $profile)
    {
        return view('profile.settings')->with('profile', $profile);
    }

    public function update(Request $request, Profile $profile) 
    {
        $profileImage = '';
        $headerImage = '';

        if (!empty($request->profileImage)) {
            $file =$request->file('profileImage');
            $extension = $file->getClientOriginalExtension(); 
            $filename = time().'.' . $extension;
            $file->move(public_path('images/profiles/uploads'), $filename);
            $data['profileImage']= '/images/profiles/uploads/'.$filename;
            $profileImage = $data['profileImage'];

            $articleImage = Postimage::create([
                'image' =>  $data['profileImage']
            ]); 

            $profile->update([
                'image' => $profileImage
            ]);
        }

        if (!empty($request->headerImage)) {
            $file =$request->file('headerImage');
            $extension = $file->getClientOriginalExtension(); 
            $filename = time().'.' . $extension;
            $file->move(public_path('images/profiles/uploads'), $filename);
            $data['headerImage']= '/images/profiles/uploads/'.$filename;
            $headerImage = $data['headerImage'];

            $articleImage = Postimage::create([
                'image' =>  $data['headerImage']
            ]); 

            $profile->update([
                'header-image' => $headerImage
            ]);
        }

        $profile->update([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return view('profile.settings')->with('profile', $profile);
    } 
}
