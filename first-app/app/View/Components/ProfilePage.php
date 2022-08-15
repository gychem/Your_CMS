<?php

namespace App\View\Components;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use Illuminate\View\Component;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfilePage extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $profile;

    public function __construct(Request $request)
    {
        $this->profile = $request->profile;  
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
