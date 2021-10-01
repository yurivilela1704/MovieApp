<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
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
            'popularMovies' => $popularMovies,
            'popularTvShows'=> $popularTvShows,
            'genresMovie' => $genresMovie,
            'genresTv' => $genresTv,
            'nowPlayingMovies' => $nowPlayingMovies
        ]);
    }

    public function moviesSession()   
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

        return view('layouts.moviesSession', [
            'popularMovies' => $popularMovies,
            'genresMovie' => $genresMovie,
            'nowPlayingMovies' => $nowPlayingMovies
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

        dump($tvDetail);

        return view('layouts.tvshow', [
            'tvDetail' => $tvDetail
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
