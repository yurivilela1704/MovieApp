@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <!-- Begin popular movies -->
        <div class="popular-movies">
            <h1 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold">Popular Movies</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($popularMovies as $movie)

                    <x-movie-card :movie="$movie" :genresMovie="$genresMovie"></x-movie-card>

                @endforeach
            </div>
        </div><!-- end popular-movies -->

        <!-- Begin popular tv Shows -->
        <div class="popular-tvshows py-12">
            <h1 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold">Popular Tv Shows</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($popularTvShows as $tvshow)

                    <x-tv-show-card :tvshow="$tvshow" :genresTv="$genresTv"></x-tv-show-card>

                @endforeach
            </div>
        </div><!-- end popular-tvshows -->

        <div class="now-playing-movies py-12"><!-- begin now playing movies -->
            <h1 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold">Now Playing Movies</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols -3 lg:grid-cols-5 gap-8">
                @foreach($nowPlayingMovies as $movie)

                    <x-movie-card :movie="$movie" :genresMovie="$genresMovie"></x-movie-card>

                @endforeach
            </div><!-- end now-playing-movies -->
        </div>
    </div>
@endsection

