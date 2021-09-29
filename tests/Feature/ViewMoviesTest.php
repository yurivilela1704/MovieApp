<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ViewMoviesTest extends TestCase
{
    
    public function theMainPageShowsCorrectInfo()
    {
        $response = $this->get(route('movies.index'));

        $response->assertSuccessful();
    }
}
