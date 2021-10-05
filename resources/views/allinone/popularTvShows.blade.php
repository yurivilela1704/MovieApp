@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-tvshows pb-6 pt-6"><!-- Begin popular tv Shows -->
            <h1 class=" uppercase tracking-wider text-yellow-500 text-lg font-semibold">Popular Tv Shows</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($popularTvShows as $tvshow)
                    <x-tv-show-card :tvshow="$tvshow" :genresTv="$genresTv"></x-tv-show-card>
                @endforeach
            </div>
        </div><!-- end popular-tvshows -->
    </div>
@endsection

