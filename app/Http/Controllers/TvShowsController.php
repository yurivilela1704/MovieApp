<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TvShowsController extends Controller
{
    public function popularTvShowsPage()
    {
        $popularTvShows = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/tv/popular')
            ->json()['results'];

        $genresTvShowList = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/genre/tv/list')
            ->json()['genres'];


        $genresTv = collect($genresTvShowList)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });



        //dump($popularTvShows);

        return view('allinone.popularTvShows', [
            'popularTvShows'=> $popularTvShows,
            'genresTv' => $genresTv,
        ]);
    }
}
