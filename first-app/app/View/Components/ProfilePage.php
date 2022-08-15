<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Profile;

class ProfilePage extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $profile;

    public function __construct()
    {
        if(auth()->user()) {
            $this->profile = Profile::where('username', '=', auth()->user()->username)->get();
        } 
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.profilepage');
    }
}
