<x-app-layout>
    <section class="border-t border-gray-500">
        <header style=" background: linear-gradient(to top, #7B1C1C, hsla(0, 0%, 0%, 0.664)), url('{{ asset('storage/ilustraciones/principal.PNG') }}');   background-attachment: fixed; position: relative; height: 400px;">
            <article class="grid grid-cols-2 md:justify-center md:items-start py-20 px-5">
                <section class="col-span-2 md:col-span-1 text-center">
                    <h2 class="text-3xl md:text-6xl text-white font-thin">
                        ¿No sabes que ver?
                    </h2>
                    <p class="mt-5 px-5 text-md md:text-lg text-gray-200">
                        Acá podrás encontrar una selecta lista de películas, series, anime que te recomendamos y si no quieres ver nada, pues puedes echarle un vistazo al listado de pódcast 
                    </p>
                </section>
                <section class="col-span-2 md:col-span-1 flex justify-center">
                    <img class="h-40 md:h-52" src="{{ asset('storage/ilustraciones/portada.svg') }}" alt="Imagen de portada">
                </section>
            </article>
        </header>
        <section class="grid grid-cols-4 justify-center text-white gap-2">
            <article class="col-span-2 md:col-span-1">
                <article class="p-8 w-full">
                    <div class="flex justify-center items-center text-gray-500">
                        <img class="h-24" src="{{ asset('storage/ilustraciones/like2.svg') }}" alt="">
                    </div>
                    <div class="text-center mt-4">
                        <div class="flex justify-center items-center gap-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                              </svg>
                              
                            <h1 class="font-thin tracking-wider">
                                Me Gusta
                            </h1>
                        </div>
                        <p class="text-sm mt-4 tracking-wide text-justify lg:text-center">
                            Deja tu like para indicar lo que viste y <span class="underline decoration-white">te gustó</span>, es una forma de calificar lo que viste
                        </p>
                    </div>
                </article>
            </article>
            <article class="col-span-2 md:col-span-1">
                <article class="p-8 w-full">
                    <div class="flex justify-center items-center text-gray-500">
                        <img class="h-24" src="{{ asset('storage/ilustraciones/favorite.svg') }}" alt="">
                    </div>
                    <div class="text-center mt-4">
                        <div class="flex justify-center gap-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="red" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-pink-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>   
                            <h1 class="font-bold tracking-wider text-pink-600">
                                Lista de farvoritas
                            </h1>
                        </div>
                        <p class="text-sm font-semibold mt-4 tracking-wide text-justify lg:text-center text-pink-600">
                            Crea tu lista de <span class="underline decoration-pink-500">favoritos</span> para que marques lo que te faltan ver o que  quieras recordar.
                        </p>
                    </div>
                </article>
            </article>
            <article class="col-span-2 md:col-span-1">
                <article class="col-span-3 md:col-span-1">
                    <article class="p-8 w-full">
                        <div class="flex justify-center items-center text-gray-500">
                            <img class="h-24" src="{{ asset('storage/ilustraciones/comments 2.svg') }}" alt="">
                        </div>
                        <div class="text-center mt-4">
                            <div class="flex justify-center gap-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-purple-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                                </svg>
                                <h1 class="font-bold  tracking-wider text-purple-600">
                                    Comentarios
                                </h1>
                            </div>
                            <p class="text-sm mt-4 font-semibold tracking-wide text-justify lg:text-center text-purple-600">
                                <span class="underline decoration-purple-500">Defiende o ataca</span> a muerte lo que has visto. No hagas spoiler, no seas mala persona
                            </p>
                        </div>
                    </article>
                </article>
            </article>
            <article class="col-span-2 md:col-span-1">
                <article class="col-span-3 md:col-span-1">
                    <article class="p-8 w-full">
                        <div class="flex justify-center items-center text-gray-500">
                            <img class="h-24" src="{{ asset('storage/ilustraciones/watched.svg') }}" alt="">
                        </div>
                        <div class="text-center mt-4">
                            <div class="flex justify-center gap-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <h1 class="font-bold tracking-wider text-gray-400">
                                    Visto
                                </h1>
                            </div>
                            <p class="text-sm mt-4 font-semibold tracking-wide text-justify lg:text-center text-gray-400">
                                Marca <span class="underline decoration-gray-500">lo que ya has visto</span> para que no repitas ;) y también para que los demás veamos tus gustos
                            </p>
                        </div>
                    </article>
                </article>
            </article>
        </section>
        @guest
            <article class="text-center">
                <a href="{{ route('register') }}" class="text-white text-sm bg-red-900 p-2">Para acceder a estas funcionalidades debes registrarte en la página </a>
            </article>
        @endguest
        <div style="height: 90px; overflow: visivility;" >
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C385.15,163.33 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #ffffff;">
                </path>
            </svg>
        </div>
        <article class="grid grid-cols-2 bg-white px-5 pb-10 items-center">
            <section class="col-span-2 md:col-span-1 flex justify-center order-2 md:order-1">
                <img class="h-40 md:h-52" src="{{ asset('storage/ilustraciones/movies.svg') }}" alt="">
            </section>
            <section class="col-span-2 md:col-span-1 text-center order-1 md:order-2 mb-5 md:mb-0">
                <h2 class="text-2xl md:text-4xl">
                    Movies
                </h2>
                <p class="text-sm md:text-lg px-5 mt-5 mb-5">
                    Échale un vistazo a nuestra biblioteca de sugerencias de películas, a ver si ya las viste todas :v
                </p>
                <a href="{{ route('movie.index') }}" class="text-center text-blue-500 underline decoration-blue-400 text-sm md:text-md">
                    Listado de pelis
                </a>
            </section>
        </article>
        <section class="bg-white flex gap-x-5 h-full overflow-x-scroll scroll-smooth snap-x scroll-pl-6 px-5">
            @forelse ($peliculas as $pelicula )
                <div class="w-96 bg-white shadow-lg rounded  scroll-ml-6 snap-center mb-5">
                    <a href="{{ route('movie.show', $pelicula) }}">
                    <div class="h-44 w-96 bg-gray-200 flex flex-col justify-between p-4 bg-cover bg-center" style="background-image: url('{{ asset('storage/portada/'. $pelicula->images->where('destination', 'portada')->pluck('url')->first()) }}')">
                    </div>
                    <div class="p-4 flex justify-center shadow-xl gap-x-5">
                        <p class="text-black font-light text-sm  tracking-widest">
                            {{ $pelicula->name }}
                        </p>
                        <span class="text-sm flex ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-gray-400">
                                <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                             </svg>
                             <span>
                                 {{ $pelicula->score }}/<small>10</small>
                            </span>
                        </span>
                    </div>
                </a>
                </div>
            @empty
                <p class="text-center">
                    No hay peliculas registradas
                </p>    
            @endforelse
            <a href="{{ route('movie.index') }}">
            <div class="px-4 flex flex-col justify-center items-center bg-gray-100 h-56">
                    <p class="underline underline-offset-4 decoration-indigo-600 font-whin w-64 mt-24 flex-1 text-lg text-center text-indigo-600">
                        Ver todas las pelis
                    </p>
                </div>
            </a>    
        </section>
            <div style="height: 110px;" class="bg-white">
                <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                    <path d="M-16.08,71.55 C6.49,-10.34 141.92,192.94 499.15,77.47 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #DB2777 ;">
                    </path>
                </svg>
            </div>
            {{-- Series --}}
            <article class="grid grid-cols-2 bg-pink-600 px-5 pb-10 items-center">
                <section class="col-span-2 md:col-span-1 text-center mb-5">
                    <h2 class="text-2xl md:text-4xl text-white">
                        Series
                    </h2>
                    <p class="text-sm md:text-xl px-5 mt-5 mb-5 text-gray-200">
                        Series clásicas y modernas, crees que lo has visto todo, pues échale un vistazo a estas tremendas series que te sugerimos
                    </p>
                    <a href="{{ route('series.index') }}" class="text-center text-black underline decoration-black text-sm md:text-md">
                        Listado de pelis
                    </a>
                </section>
                <section class="col-span-2 md:col-span-1 flex justify-center">
                    <img class="h-40 md:h-52" src="{{ asset('storage/ilustraciones/series.svg') }}" alt="">
                </section>
            </article>
            <section class="bg-pink-600 flex gap-x-5 h-full overflow-x-scroll scroll-smooth snap-x scroll-pl-6 px-5">
                @forelse ($series as $serie )
                <div class="w-96 bg-white shadow-lg rounded  scroll-ml-6 snap-center mb-5">
                    <a href="{{ route('series.show', $serie) }}">
                    <div class="h-44 w-96 bg-gray-200 flex flex-col justify-between p-4 bg-cover bg-center" style="background-image: url('{{ asset('storage/portada/'. $serie->images->where('destination', 'portada')->pluck('url')->first()) }}')">
                    </div>
                    <div class="p-4 flex justify-center items-center gap-x-5 shadow-xl bg-pink-900 ">
                        <p class="text-white font-light text-sm text-center tracking-widest">
                            {{ $serie->name }}
                        </p>
                        <span class="text-sm flex">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-gray-300">
                                <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                             </svg>
                             <span class="text-white">
                                 {{ $serie->score }}/<small>10</small>
                            </span>
                        </span>
                    </div>
                </a>
                </div>
                @empty
                    <p class="text-center">
                        No hay series registradas
                    </p>    
                @endforelse
                <a href="{{ route('series.index') }}">
                <div class="px-4 flex flex-col justify-center items-center bg-white h-56">
                        <p class="underline underline-offset-4 decoration-black font-whin w-64 mt-24 flex-1 text-lg text-center text-black">
                            Ver todas las series
                        </p>
                    </div>
                </a>    
            </section>
            <div style="height: 100px; overflow: hidden;" class="bg-purple-600">
                <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                    <path d="M-9.87,92.28 C132.34,82.41 170.14,-53.77 507.05,67.61 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: #DB2777;">
                    </path>
                </svg>
            </div>
            {{-- Animes --}}
            <article class="grid grid-cols-2 bg-purple-600 px-5 pb-10 items-center">
                <section class="col-span-2 md:col-span-1 flex justify-center order-2 md:order-1 ">
                    <img class="h-40 md:h-52" src="{{ asset('storage/ilustraciones/anime.svg') }}" alt="">
                </section>
                <section class="col-span-2 md:col-span-1 order-1 md:order-2 text-center mb-5 md:mb-0">
                    <h2 class="text-2xl md:text-4xl text-white">
                        Animes
                    </h2>
                    <p class="text-sm md:text-xl px-5 mt-5 mb-5 text-gray-200">
                        Échale un vistazo a nuestra biblioteca de sugerencias de películas, a ver si ya las viste todas :v
                    </p>
                    <a href="{{ route('anime.index') }}" class="text-center text-white underline decoration-white text-sm md:text-md">
                        Listado de Animes
                    </a>
                </section>
            </article>
            <section class="bg-purple-600 flex gap-x-5 h-full overflow-x-scroll scroll-smooth snap-x scroll-pl-6 px-5">
                @forelse ($animes as $anime )
                <div class="w-96 bg-white shadow-lg rounded  scroll-ml-6 snap-center mb-5">
                    <a href="{{ route('anime.show', $anime) }}">
                    <div class="h-44 w-96 bg-gray-200 flex flex-col justify-between p-4 bg-cover bg-center" style="background-image: url('{{ asset('storage/portada/'. $anime->images->where('destination', 'portada')->pluck('url')->first()) }}')">
                    </div>
                    <div class="p-4 flex justify-center items-center gap-x-5 shadow-xl bg-purple-900">
                        <p class="text-white font-light text-sm text-center tracking-widest">
                            {{ $anime->name }}
                        </p>
                        <span class="text-sm flex">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-gray-300">
                                <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                             </svg>
                             <span class="text-white">
                                 {{ $anime->score }}/<small>10</small>
                            </span>
                        </span>
                    </div>
                </a>
                </div>
                @empty
                    <p class="text-center">
                        No hay animes registradas
                    </p>    
                @endforelse
                <a href="{{ route('anime.index') }}">
                <div class="px-4 flex flex-col justify-center items-center bg-white h-56">
                        <p class="underline underline-offset-4 decoration-black font-whin w-64 mt-24 flex-1 text-lg text-center text-black">
                            Ver todas las animes
                        </p>
                    </div>
                </a>    
            </section>
            <div style="height: 90px; overflow: hidden;" class="bg-purple-600">
                <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                    <path d="M-21.16,82.41 C118.79,-41.92 95.65,197.88 499.72,70.56 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill:#000000;">
                    </path>
                </svg>
            </div>
            <article class="grid grid-cols-2 bg-black px-5 pb-10 items-center">
                <section class="col-span-2 md:col-span-1 text-center">
                    <h2 class="text-4xl text-white">
                        Podcasts
                    </h2>
                    <p class="text-xl px-5 mt-5 mb-5 text-gray-200">
                        Échale un vistazo a nuestra biblioteca de sugerencias de películas, a ver si ya las viste todas :v
                    </p>
                    <a href="{{ route('podcast.index') }}" class="text-center text-white underline decoration-white">
                        Listado de Podcast
                    </a>
                </section>
                <section class="col-span-2 md:col-span-1 flex justify-center">
                    <img class="h-52" src="{{ asset('storage/ilustraciones/podcasts.svg') }}" alt="">
                </section>
            </article>
    </section>
</x-app-layout>
