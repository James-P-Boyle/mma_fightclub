<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeroHeader extends Component
{
    // public $imagePaths;
 
    public function __construct()
    {
        // $this->imagePaths = $imagePaths;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.hero-header');
    }
}
