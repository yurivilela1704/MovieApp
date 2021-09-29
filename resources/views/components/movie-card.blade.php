<div class="mt-8">
    <a href="{{ route('movies.show', $movie['id']) }}">
        <img src="{{ 'https://image.tmdb.org/t/p/w500' . $movie['poster_path'] }}" alt="{{ $movie['title'] . 'poster' }}"
             class="hover:opacity-75 transition ease-in-out duration-150"></a>
    <div class="mt- 2">
        <a href="{{ route('movies.show', $movie['id']) }}" 
        class="text-lg mt-2 hover:text-yellow-500">{{ $movie['title'] }}</a>
        <div class="flex items-center text-gray-400 text-sm mt-1">
            <span>{{ \Carbon\Carbon::parse($movie['release_date'])-> format('M d, Y')}}</span>
            <span class="mx-2">|</span>
            <span class="material-icons text-yellow-300 ml-1">star</span>
            <span class="ml-1">{{$movie['vote_average'] * 10 . '%'}}</span>
        </div>
        <div class="text-gray-400 text-sm">
            @foreach($movie['genre_ids'] as $genreMovie)
                {{ $genresMovie->get($genreMovie) }}@if(!$loop->last), @endif
            @endforeach
        </div>
    </div>
</div>
<!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
