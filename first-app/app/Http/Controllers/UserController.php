<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index() 
    {
        $users = User::all();
        return view('admin.users.list')->with('users', $users);
    } 

    public function create() 
    {
        return view('admin.users.create');
    } 

    public function store() // Create the user
    {
        $rules = [
            'username' => ['required', 'min:3', 'max:255', Rule::unique('users', 'username')],
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')],
            'password' => ['required', 'min:7', 'max:255']
        ];

        $attributes = request()->validate($rules);

        $user = User::create($attributes);

        return redirect('/admin/users')->with('success', "User has been created.");
    }

    public function edit(User $user) 
    {
        return view('admin.users.edit')->with('user', $user)->with('success', "User $user->name has been updated.");;
    } 

    public function update(Request $request, User $user) 
    {
        $user->update([
            'name' => $request->name,
            'email' =>  $request->email,
            'rank' => $request->rank,
            'password' => $request->password
        ]);

        return redirect('/admin/users/');
    } 

    public function destroy(User $user) 
    {
        $user->delete();
        return redirect('/admin/users')->with('success', "User $user->name has been deleted.");
    } 
}