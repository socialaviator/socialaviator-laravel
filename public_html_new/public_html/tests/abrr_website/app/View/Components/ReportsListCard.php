<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ReportsListCard extends Component
{
    public $reportUrl;
    public $thumbnailImageUrl;
    public $thumbnailImageAlt;
    public $reportTitle;
    public $sortDescription;
    /**
     * Create a new component instance.
     */
    public function __construct($reportUrl="",$reportTitle="",$thumbnailImageUrl="",$thumbnailImageAlt="",$sortDescription="")
    {
        $this->reportUrl=$reportUrl;
        $this->reportTitle=$reportTitle;
        $this->thumbnailImageUrl=$thumbnailImageUrl;
        $this->thumbnailImageAlt=$thumbnailImageAlt;
        $this->sortDescription=$sortDescription;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.reports-list-card');
    }
}
