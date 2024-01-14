<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class popUpDiv extends Component
{
    /**
     * Create a new component instance.
     */

    public $class;

    public function __construct($class)
    {
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.pop-up-div');
    }
}
