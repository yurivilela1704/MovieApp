<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TvShowCard extends Component
{
    public $tvshow;
    public $genresTv;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tvshow, $genresTv)
    {
        $this->tvshow = $tvshow;
        $this->genresTv = $genresTv;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tv-show-card');
    }
}
