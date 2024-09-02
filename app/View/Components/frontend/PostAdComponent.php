<?php

namespace App\View\Components\frontend;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostAdComponent extends Component
{
    public $extraClasses;
    public $styles;
    public $title;

    public function __construct($extraClasses = '', $styles = '', $title = '')
    {
        $this->extraClasses = $extraClasses;
        $this->styles = $styles;
        $this->title = $title;
    }


    public function render(): View|Closure|string
    {
        return view('components.frontend.post-ad-component');
    }
}
