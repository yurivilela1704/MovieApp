@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800"> <!-- begin movie-infos -->
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row  ">
            <img src="{{ 'https://image.tmdb.org/t/p/w500' . $tvDetail['poster_path'] }}" 
                alt="{{ $tvDetail['name'] . 'poster' }}"
                class="w-64 md:w-80">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold text-yellow-500">{{ $tvDetail['name'] }}</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm mt-1">
                    <span>{{ \Carbon\Carbon::parse($tvDetail['first_air_date'])-> format('M d, Y')}}</span>
                    <span class="mx-2">|</span>
                    <span class="material-icons text-yellow-300 ml-1">star</span>
                    <span class="ml-1">{{$tvDetail['vote_average'] * 10 . '%'}}</span>
                    <span class="mx-2">|</span>
                    <span>
                    @foreach($tvDetail['genres'] as $genreMovie)
                        {{ $genreMovie['name'] }}@if(!$loop->last), @endif
                    @endforeach
                    </span>
                </div>

                <p class="text-gray-300 mt-8">
                {{ $tvDetail['overview'] }}
                </p>

                <div class="mt-12">
                    <h4 class="font-semibold text-yellow-500">Featured Cast</h4>
                    <div class="flex mt-4">
                        @foreach ($tvDetail['credits']['crew'] as $crew)
                            @if ($loop->index < 2)
                                <div class="mr-8">
                                    <div>{{ $crew['name'] }}</div>
                                    <div class="text-sm text-gray-400">{{$crew['job']}}</div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>


                <div class="mt-12">
                    <a href="https://www.youtube.com/watch?v={{  $tvDetail['videos']['results'][0]['key']}}"> 
                        <button class="flex items-center bg-yellow-500 text-gray-800 rounded font-semibold
                        py-4 px-4 hover:bg-yellow-200 transition ease-in-out duration-150">
                            <span class="material-icons mr-2">play_circle_filled</span>
                            Play Trailer
                        </button>
                    </a>       
                </div>
            </div>
        </div>
    </div><!-- end movie-infos -->

    <div class="movie-cast border-b border-gray-800"> <!-- begin movie-cast -->
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold text-yellow-500">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($tvDetail['credits']['cast'] as $cast)
                    @if($loop->index < 5)
                        <div class="mt-8">
                            <a href="#">
                                <img src="{{ 'https://image.tmdb.org/t/p/w300/' . $cast['profile_path'] }}" 
                                alt="actor1"
                                    class="hover:opacity-75 transition ease-in-out duration-150"></a>
                            <div class="mt-2">
                                <a href="#" class="text-lg mt-2 hover:text-gray-300">{{$cast['name']}}</a>
                                <div class="text-sm text-gray-400">
                                    {{$cast['character']}}
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div><!-- end movie-cast -->

    <div class="movie-images border-b border-gray-800"><!-- begining movies images -->
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold text-yellow-500">Images</h2>
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-1">
                @foreach ($tvDetail['images']['backdrops'] as $image)
                    @if($loop->index < 9)
                        <div class="mt-8">
                            <a href="#">
                                <img src="{{ 'https://image.tmdb.org/t/p/w300/' . $image['file_path'] }}" alt="image"
                                    class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div><!-- end movies images -->

@endsection
