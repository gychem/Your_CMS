<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Contact;

class AdminNav extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $inboxCountValue;

    public function __construct()
    {
        $this->inboxCountValue = Contact::count();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin-nav');
    }
}
