<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

use App\Models\Page;
use App\Models\Profile;
use App\Models\User;

class Header extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $pages;
    public $profile;

    public function __construct()
    {
        $this->pages = Page::all();

        if(auth()->user()) {
            $this->profile = Profile::find(Auth::id()); 
        }   
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header');
    }
}
