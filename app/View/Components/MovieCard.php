<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MovieCard extends Component
{
    public $movie;
    public $genresMovie;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($movie, $genresMovie)
    {
        $this->movie = $movie;
        $this->genresMovie = $genresMovie;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.movie-card');
    }
}
