<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ReletedReportsCard extends Component
{
    public $sortDescription;
    public $reportImageUrl;
    public $title;
    public $imageAlt;
    /**
     * Create a new component instance.
     */
    public function __construct($title="",$sortDescription="",$reportImageUrl="",$imageAlt="")
    {
        $this->imageAlt=$imageAlt;
        $this->title=$title;
        $this->sortDescription=$sortDescription;
        $this->reportImageUrl=$reportImageUrl;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.releted-reports-card');
    }
}
