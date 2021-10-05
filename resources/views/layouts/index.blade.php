@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <!-- Begin popular movies -->
        <div class="popular-movies pb-6">
            <h1 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold">Popular Movies</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($popularMovies as $movie)
                    <x-movie-card :movie="$movie" :genresMovie="$genresMovie"></x-movie-card>
                @endforeach
            </div>
            <div class="w-full flex justify-center my-6">
                <a style="width: 300px" href="{{route('popularMovies')}}">
                    <button class="w-100 sm:w-full capitalize text-center items-center bg-yellow-500 text-gray-800
                        font-semibold rounded py-2 px-16 hover:bg-yellow-300 transition ease-in-out duration-150">
                        more popular movies
                    </button>
                </a>
            </div>
        </div><!-- end popular-movies -->

        <!-- Begin popular tv Shows -->
        <div class="popular-tvshows pb-6 pt-6">
            <h1 class=" uppercase tracking-wider text-yellow-500 text-lg font-semibold">Popular Tv Shows</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($popularTvShows as $tvshow)
                    <x-tv-show-card :tvshow="$tvshow" :genresTv="$genresTv"></x-tv-show-card>
                @endforeach
            </div>
            <div class="w-full flex justify-center my-6">
                <a style="width: 300px" href="{{route('popularTvShows')}}">
                    <button class="w-100 sm:w-full capitalize text-center items-center bg-yellow-500 text-gray-800
                        font-semibold rounded py-2 px-16 hover:bg-yellow-300 transition ease-in-out duration-150">
                        More Popular Tv Shows
                    </button>
                </a>
            </div>
        </div><!-- end popular-tvshows -->

        <div class="now-playing-movies pb-12 pt-6"><!-- begin now playing movies -->
            <h1 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold">Now Playing Movies</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols -3 lg:grid-cols-5 gap-8">
                @foreach($nowPlayingMovies as $movie)
                    <x-movie-card :movie="$movie" :genresMovie="$genresMovie"></x-movie-card>
                @endforeach
            </div>
            <div class="w-full flex justify-center my-6">
                <a style="width: 300px" href="#">
                    <button class="w-100 sm:w-full text-center items-center bg-yellow-500 text-gray-800
                        font-semibold rounded py-2 px-16 hover:bg-yellow-300 transition ease-in-out duration-150">
                        More Playing movies
                    </button>
                </a>
            </div>
        </div><!-- end now-playing-movies -->
    </div>
@endsection

