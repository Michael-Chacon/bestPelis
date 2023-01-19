<x-app-layout>
    <!-- This is an example component -->
    <div class="">
        @php
            $c = 0;
        @endphp
                <div id="default-carousel" class="relative" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="overflow-hidden relative h-96">
                @forelse ($peliculas as $pelicula )
                    <p class="text-white">
                        @php
                            $c++;
                        @endphp
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out h-screen bg-opacity-60 " data-carousel-item>
                            <span class=" absolute mt-80 text-center left-1/2 text-xl font-semibold text-pink-500 underline decoration-1 decoration-pink-900 bg-gray-900 opacity-50 -translate-x-1/2 -translate-y-1/2 sm:text-3xl  md:text-4xl tracking-widest bg-inherit rounded-full">
                                <a class="shadow-2xl  italic" href="{{ route('movie.show', $pelicula) }}">
                                    {{ $pelicula->name }}
                                </a> 
                            </span>
                            <img class="object-cover object-center h-96 w-full" src="{{ asset('storage/portada/'. $pelicula->images()->where('destination', 'portada')->pluck('url')->first()) }}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                        </div>
                        @empty
                        <p class="text-white">No hay peliculas</p>
                        @endforelse
                    </div>
                    <!-- Slider controls -->
                    <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-red-500 dark:bg-red-500 group-hover:bg-red-500 dark:group-hover:bg-red-500 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                            <span class="hidden">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-red-500 dark:bg-red-500 group-hover:bg-red-500 dark:group-hover:bg-red-500 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            <span class="hidden">Next</span>
                        </span>
                    </button>
                </div>
            </p>
        
        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    </div>
    <!-- component -->

       <h1 class="text-white">
        Hola putos
       </h1>
</div>
</x-app-layout>
