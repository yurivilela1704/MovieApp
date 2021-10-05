<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TvShowsController;

/* Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', [IndexController::class, 'index'])
    ->name('homepage');


Route::get('/movies', [MoviesController::class, 'moviesPage'])
    ->name('moviesPage');

Route::get('/movies/popularmovies', [MoviesController::class, 'popularMoviesPage'])
    ->name('popularMovies');

Route::get('/movies/{movies}', [MoviesController::class, 'show'])
    ->name('movies.show');


Route::get('/tvshows', [TvShowsController::class, 'tvshow'])
    ->name('tvshow.show');

Route::get('/tvshows/populartvshows', [TvShowsController::class, 'popularTvShowsPage'])
    ->name('popularTvShows');

Route::get('/tvshows/{tvshow}', [MoviesController::class, 'tvshow'])
    ->name('tvshow.show');




