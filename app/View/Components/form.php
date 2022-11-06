<?php

namespace App\View\Components;

use Illuminate\View\Component;

class form extends Component
{

    public function __construct($user)
    {

    }

    public function render()
    {
        return view('components.form');
    }
}
