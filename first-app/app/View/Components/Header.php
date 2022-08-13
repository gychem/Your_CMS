<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Page;
use App\Models\Profile;

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
        return view('components.header');
    }
}
