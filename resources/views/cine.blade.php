<x-app-layout>
    <section class="bg-gradient-to-r from-red-900 via-black to-black border-t border-gray-500 mb-10">
        <article class="grid grid-cols-2 md:justify-center md:items-start py-10 px-5">
            <section class="col-span-1 text-center">
                <h2 class="text-6xl text-white font-thin">
                    ¿No sabes que ver?
                </h2>
                <p class="mt-5 px-5 text-xl text-gray-200">
                     Acá podrás encontrar una selecta lista de películas, series, anime que te recomendamos y si no quieres ver nada, pues puedes echarle un vistazo al listado de pódcast 
                </p>
            </section>
            <section class="col-span-1 flex justify-center">
                <img class="h-52" src="{{ asset('storage/ilustraciones/portada.svg') }}" alt="Imagen de portada">
            </section>
        </article>

        <div style="height: 100px; overflow: hidden;" >
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C385.15,163.33 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #ffffff;">
                </path>
            </svg>
        </div>
        <article class="grid grid-cols-2 bg-white px-5 pb-10 items-center">
            <section class="col-span-1 flex justify-center">
                <img class="h-52" src="{{ asset('storage/ilustraciones/movies.svg') }}" alt="">
            </section>
            <section class="col-span-1 text-center">
                <h2 class="text-4xl">
                    Movies
                </h2>
                <p class="text-xl px-5 mt-5 mb-5">
                    Échale un vistazo a nuestra biblioteca de sugerencias de películas, a ver si ya las viste todas :v
                </p>
                <a href="{{ route('movie.index') }}" class="text-center text-blue-500 underline decoration-blue-400">
                    Listado de pelis
                </a>
            </section>
        </article>
        <section class="bg-white flex gap-x-5 h-full overflow-x-scroll scroll-smooth snap-x scroll-pl-6 px-5">
            @forelse ($peliculas as $pelicula )
                <div class="w-96 bg-white shadow-lg rounded  scroll-ml-6 snap-center mb-5">
                    <a href="{{ route('movie.show', $pelicula) }}">
                    <div class="h-44 w-96 bg-gray-200 flex flex-col justify-between p-4 bg-cover bg-center" style="background-image: url('{{ asset('storage/portada/'. $pelicula->images()->where('destination', 'portada')->pluck('url')->first()) }}')">
                    </div>
                    <div class="p-4 flex flex-col items-center shadow">
                        <p class="text-black font-light text-sm text-center tracking-widest">
                            {{ $pelicula->name }}
                        </p>
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
            <article class="grid grid-cols-2 bg-pink-600 px-5 pb-10 items-center">
                <section class="col-span-1 text-center">
                    <h2 class="text-4xl text-white">
                        Series
                    </h2>
                    <p class="text-xl px-5 mt-5 mb-5 text-gray-200">
                        Échale un vistazo a nuestra biblioteca de sugerencias de películas, a ver si ya las viste todas :v
                    </p>
                    <a href="{{ route('series.index') }}" class="text-center text-black underline decoration-black">
                        Listado de pelis
                    </a>
                </section>
                <section class="col-span-1 flex justify-center">
                    <img class="h-52" src="{{ asset('storage/ilustraciones/series.svg') }}" alt="">
                </section>
            </article>
            <section class="bg-pink-600 flex gap-x-5 h-full overflow-x-scroll scroll-smooth snap-x scroll-pl-6 px-5">
                @forelse ($series as $serie )
                <div class="w-96 bg-white shadow-lg rounded  scroll-ml-6 snap-center mb-5">
                    <a href="{{ route('series.show', $serie) }}">
                    <div class="h-44 w-96 bg-gray-200 flex flex-col justify-between p-4 bg-cover bg-center" style="background-image: url('{{ asset('storage/portada/'. $serie->images()->where('destination', 'portada')->pluck('url')->first()) }}')">
                    </div>
                    <div class="p-4 flex flex-col items-center shadow">
                        <p class="text-black font-light text-sm text-center tracking-widest">
                            {{ $serie->name }}
                        </p>
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
            <article class="grid grid-cols-2 bg-purple-600 px-5 pb-10 items-center">
                <section class="col-span-1 flex justify-center">
                    <img class="h-52" src="{{ asset('storage/ilustraciones/anime.svg') }}" alt="">
                </section>
                <section class="col-span-1 text-center">
                    <h2 class="text-4xl text-white">
                        Animes
                    </h2>
                    <p class="text-xl px-5 mt-5 mb-5 text-gray-200">
                        Échale un vistazo a nuestra biblioteca de sugerencias de películas, a ver si ya las viste todas :v
                    </p>
                    <a href="{{ route('anime.index') }}" class="text-center text-white underline decoration-white">
                        Listado de Animes
                    </a>
                </section>
            </article>
            <section class="bg-purple-600 flex gap-x-5 h-full overflow-x-scroll scroll-smooth snap-x scroll-pl-6 px-5">
                @forelse ($animes as $anime )
                <div class="w-96 bg-white shadow-lg rounded  scroll-ml-6 snap-center mb-5">
                    <a href="{{ route('anime.show', $anime) }}">
                    <div class="h-44 w-96 bg-gray-200 flex flex-col justify-between p-4 bg-cover bg-center" style="background-image: url('{{ asset('storage/portada/'. $anime->images()->where('destination', 'portada')->pluck('url')->first()) }}')">
                    </div>
                    <div class="p-4 flex flex-col items-center shadow">
                        <p class="text-black font-light text-sm text-center tracking-widest">
                            {{ $anime->name }}
                        </p>
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
                <section class="col-span-1 flex justify-center">
                    <img class="h-52" src="{{ asset('storage/ilustraciones/podcasts.svg') }}" alt="">
                </section>
                <section class="col-span-1 text-center">
                    <h2 class="text-4xl text-white">
                        Podcasts
                    </h2>
                    <p class="text-xl px-5 mt-5 mb-5 text-gray-200">
                        Échale un vistazo a nuestra biblioteca de sugerencias de películas, a ver si ya las viste todas :v
                    </p>
                    <a href="{{ route('anime.index') }}" class="text-center text-white underline decoration-white">
                        Listado de Podcast
                    </a>
                </section>
            </article>
    </section>
</x-app-layout>
