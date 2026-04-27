<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Blogs extends Component
{
    public $imageUrl;
    public $fadeAnimation;
    public $title;
    public $message;
    /**
     * Create a new component instance.
     */
    public function __construct($imageUrl, $title, $message="", $fadeAnimation="")
    {
        $this->imageUrl = $imageUrl;
        $this->title = $title;
        $this->message = $message;
        $this->fadeAnimation = $fadeAnimation;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.blogs');
    }
}
