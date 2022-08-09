<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index() 
    {
        return view('contactForm');
    }

    public function index_admin()
    {
        $messages = Contact::all();
        return view('admin.inbox.messages')->with('messages', $messages);
    }

    public function show(Contact $message) 
    {
        return view('admin.inbox.message')->with('message', $message);
    } 

    public function store()
    {
        $rules = [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'message' => ['required']
        ];

        $attributes = request()->validate($rules);

        Contact::create($attributes);
        
        return redirect()->back()->with('success', "Thank you for contacting us. We will contact you shortly.");
    }

    
    public function destroy(Contact $message) 
    {
        $message->delete();

        return redirect('/admin/inbox')->with('success', "Message ID $message->id has been deleted.");
    } 

}