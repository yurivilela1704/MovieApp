<div class="mt-8">
    <a href="{{ route('tvshow.show', $tvshow['id']) }}">
        <img  src="{{ 'https://image.tmdb.org/t/p/w500' . $tvshow['poster_path'] }}"
            alt="{{ $tvshow['name'] . 'poster' }}"
             class="hover:opacity-75 transition ease-in-out duration-150"></a>
    <div class="mt-2">
        <a href="{{ route('tvshow.show', $tvshow['id']) }}"
         class="text-lg mt-2 hover:text-yellow-500">{{ $tvshow['name'] }}</a>
        <div class="flex items-center text-gray-400 text-sm mt-1">
            <span>{{ \Carbon\Carbon::parse($tvshow['first_air_date'])-> format('M d, Y')}}</span>
            <span class="mx-2">|</span>
            <span class="material-icons text-yellow-300 ml-1">star</span>
            <span class="ml-1">{{$tvshow['vote_average'] * 10 . '%'}}</span>
        </div>
        <div class="text-gray-400 text-smmovies.index">
            @foreach($tvshow['genre_ids'] as $genreTvShow)
                {{ $genresTv->get($genreTvShow) }}@if(!$loop->last), @endif
            @endforeach
        </div>
    </div>
</div>
