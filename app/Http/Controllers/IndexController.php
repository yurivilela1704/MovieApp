<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class IndexController extends Controller
{
    public function index()
    {
        $popularMovies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/popular')
            ->json()['results'];

        $popularTvShows = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/tv/popular')
            ->json()['results'];

        $genresMovieList = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/genre/movie/list')
            ->json()['genres'];

        $genresTvShowList = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/genre/tv/list')
            ->json()['genres'];

        $genresMovie = collect($genresMovieList)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });

        $genresTv = collect($genresTvShowList)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });

        $nowPlayingMovies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/now_playing')
            ->json()['results'];


        //dump($popularTvShows);

        return view('layouts.index', [
            'popularMovies' => collect($popularMovies)->take(5),
            'popularTvShows'=> collect($popularTvShows)->take(5),
            'genresMovie' => $genresMovie,
            'genresTv' => $genresTv,
            'nowPlayingMovies' => collect($nowPlayingMovies)->take(5),
        ]);
    }
}
