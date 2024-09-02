<?php

namespace App\View\Components\frontend;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    public $extraClasses;
    public $styles;

    public function __construct($extraClasses = '', $styles = '')
    {
        $this->extraClasses = $extraClasses;
        $this->styles = $styles;
    }

    public function render(): View|Closure|string
    {
        return view('components.frontend.navbar');
    }
}
