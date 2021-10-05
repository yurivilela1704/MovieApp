<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{

    public function moviesPage()
    {
        $popularMovies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/popular')
            ->json()['results'];

        $genresMovieList = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/genre/movie/list')
            ->json()['genres'];

        $genresMovie = collect($genresMovieList)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });

        $nowPlayingMovies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/now_playing')
            ->json()['results'];

        $topRatedMovies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/top_rated')
            ->json()['results'];

        $upcomingMovies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/upcoming')
            ->json()['results'];

        return view('layouts.moviesPage', [
            'popularMovies' => $popularMovies,
            'genresMovie' => $genresMovie,
            'nowPlayingMovies' => $nowPlayingMovies,
            'topRatedMovies' =>$topRatedMovies,
           'upcomingMovies' => $upcomingMovies,
        ]);
    }

    public function popularMoviesPage()
    {
        $popularMovies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/popular')
            ->json()['results'];

        $genresMovieList = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/genre/movie/list')
            ->json()['genres'];

        $genresMovie = collect($genresMovieList)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });


        return view('allinone.popularMovies', [
            'popularMovies' => $popularMovies,
            'genresMovie' => $genresMovie,
        ]);
    }

    public function show($id)
    {
        $movieDetail = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/' . $id . '?append_to_response=credits,videos,images')
            ->json();

        //dump($movieDetail);

        return view('layouts.show', [
            'movieDetail' => $movieDetail,
        ]);
    }

    public function tvshow($id)
    {
        $tvDetail = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/tv/' . $id . '?append_to_response=credits,videos,images')
        ->json();

        //dump($tvDetail);

        return view('layouts.tvshow', [
            'tvDetail' => $tvDetail
        ]);
    }

}
