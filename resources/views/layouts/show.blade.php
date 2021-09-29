@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row  ">
            <img src="/img/parasite.jpg" class="w-64 md:w-96">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">Parasite (2019)</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm mt-1">
                    <span>Feb 20, 2020</span>
                    <span class="mx-2">|</span>
                    <span class="material-icons text-yellow-300 ml-1">star</span>
                    <span class="ml-1">85%</span>
                    <span class="mx-2">|</span>
                    <span>Action, Suspense, Drama</span>
                </div>

                <p class="text-gray-300 mt-8">
                    dasnjkljsdklasdjksda asdjkljkasdljklasdjkladsjklasd asdjijkasdjasdjkasdjklasd asdasdjkljklsad
                    dasnjkljsdklasdjksda asdjkljkasdljklasdjkladsjklasd asdjijkasdjasdjkasdjklasd asdasdjkljklsad
                    dasnjkljsdklasdjksda asdjkljkasdljklasdjkladsjklasd asdjijkasdjasdjkasdjklasd asdasdjkljklsad
                    dasnjkljsdklasdjksda asdjkljkasdljklasdjkladsjklasd asdjijkasdjasdjkasdjklasd asdasdjkljklsad
                    dasnjkljsdklasdjksda!
                </p>

                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Cast</h4>
                    <div class="flex mt-4">
                        <div>
                            <div>Bong Joon-ho</div>
                            <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
                        </div>
                        <div class="ml-8">
                            <div>Han Jin-won</div>
                            <div class="text-sm text-gray-400">Screenplay</div>
                        </div>
                    </div>
                </div>
                <div class="mt-12">
                    <button class="flex items-center bg-yellow-500 text-gray-800 rounded font-semibold
                    py-4 px-4 hover:bg-yellow-200 transition ease-in-out duration-150">
                        <span class="material-icons ml-2 mr-2">play_circle_filled</span>
                        Play Trailer
                    </button>
                </div>
            </div>
        </div>
    </div><!-- end movie-cast -->

    <div class="movie-images border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Images</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols -3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/image1.jpg" alt="parasite-wallpaper"
                             class="hover:opacity-75 transition ease-in-out duration-150"></a>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/image2.jpg" alt="parasite-wallpaper"
                             class="hover:opacity-75 transition ease-in-out duration-150"></a>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/image3.jpg" alt="parasite-wallpaper"
                             class="hover:opacity-75 transition ease-in-out duration-150"></a>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/image4.jpg" alt="parasite-wallpaper"
                             class="hover:opacity-75 transition ease-in-out duration-150"></a>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/image5.jpg" alt="parasite-wallpaper"
                             class="hover:opacity-75 transition ease-in-out duration-150"></a>
                </div>
        </div>
    </div>

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols -3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/actor1.jpg" alt="parasite-wallpaper"
                             class="hover:opacity-75 transition ease-in-out duration-150"></a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span>Feb 20, 2020</span>
                            <span class="mx-2">|</span>
                            <span class="material-icons text-yellow-300 ml-1">star</span>
                            <span class="ml-1">85%</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Suspense, Drama
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="/img/actor2.jpg" alt="parasite-wallpaper"
                             class="hover:opacity-75 transition ease-in-out duration-150"></a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span>Feb 20, 2020</span>
                            <span class="mx-2">|</span>
                            <span class="material-icons text-yellow-300 ml-1">star</span>
                            <span class="ml-1">85%</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Suspense, Drama
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/actor3.jpg" alt="parasite-wallpaper"
                             class="hover:opacity-75 transition ease-in-out duration-150"></a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span>Feb 20, 2020</span>
                            <span class="mx-2">|</span>
                            <span class="material-icons text-yellow-300 ml-1">star</span>
                            <span class="ml-1">85%</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Suspense, Drama
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/actor4.jpg" alt="parasite-wallpaper"
                             class="hover:opacity-75 transition ease-in-out duration-150"></a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span>Feb 20, 2020</span>
                            <span class="mx-2">|</span>
                            <span class="material-icons text-yellow-300 ml-1">star</span>
                            <span class="ml-1">85%</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Suspense, Drama
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/actor5.jpg" alt="parasite-wallpaper"
                             class="hover:opacity-75 transition ease-in-out duration-150"></a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span>Feb 20, 2020</span>
                            <span class="mx-2">|</span>
                            <span class="material-icons text-yellow-300 ml-1">star</span>
                            <span class="ml-1">85%</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Suspense, Drama
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
