<x-app-layout>
    <div class="overflow-hidden shadow-sm ">
        <section class="grid grid-cols-1 ">
            <img class="object-cover object-bottom hover:object-top h-96 w-full" src="{{ asset('storage/portada/' . $movie->images->where('destination', 'portada')->pluck('url')->first()) }}" alt="">
        </section>
        <div class="container mx-auto">
            <section class="grid grid-cols-4 mb-10 gap-x-4">
                <article class="col-span-4 md:col-span-1">
                    <img class="md:-mt-40  w-0 md:w-80  border border-gray-500 rounded-xl mb-5 "src="{{ asset('storage/perfil/' . $movie->images()->where('destination', 'perfil')->pluck('url')->first()) }}"
                        alt="">
                        <section class="mb-2 text-white items-center border text-center border-gray-500 p-3">
                            <livewire:trailer-component :modelo='$movie'/>
                        </section> 
                        <section class="flex justify-center gap-x-2   text-white items-center border border-gray-500 p-3">
                            <div class="border border-gray-600 bg-gradient-to-r from-indigo-900 via-black to-black rounded-full p-2 flex items-center gap-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                </svg>
                                <span class="text-sm">{{ $movie->score }} /<small>10</small></span>
                            </div>
                            @auth    
                                <div class="border border-gray-600 bg-gradient-to-r from-purple-900 via-black to-black hover:from-purple-900 hover:via-purple-800 hover:to-black rounded-full p-2 gap-x-2">
                                    <livewire:like-component :modelo='$movie'/>
                                </div>
                                <div class="border border-gray-600 bg-gradient-to-r from-pink-900 via-black to-black hover:from-pink-900 hover:via-pink-800 hover:to-black rounded-full p-2">
                                    <livewire:favorite-component  :modelo="$movie" />
                                </div>
                                <div class="border border-gray-600 bg-gradient-to-r from-pink-900 via-black to-black hover:from-pink-900 hover:via-pink-800 hover:to-black rounded-full p-2">
                                    <livewire:seen-component :modelo='$movie' />
                                </div>
                            @endauth
                        </section>     
                </article>
                <article class="col-span-4 md:col-span-3 pt-5 text-white px-3">
                    <h1 class="text-5xl capitalize">{{ $movie->name }}<span class="text-xl text-gray-500"> ({{ $movie->premiere->format('Y') }})</span></h1>
                    {{-- premiere, genre  --}}
                    <span class="flex gap-x-2 mt-2 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-5 h-5 fill-teal-200">
                            <path
                                d="M16.364 3.636a.75.75 0 00-1.06 1.06 7.5 7.5 0 010 10.607.75.75 0 001.06 1.061 9 9 0 000-12.728zM4.697 4.697a.75.75 0 00-1.061-1.06 9 9 0 000 12.727.75.75 0 101.06-1.06 7.5 7.5 0 010-10.607z" />
                            <path
                                d="M12.475 6.465a.75.75 0 011.06 0 5 5 0 010 7.07.75.75 0 11-1.06-1.06 3.5 3.5 0 000-4.95.75.75 0 010-1.06zM7.525 6.465a.75.75 0 010 1.06 3.5 3.5 0 000 4.95.75.75 0 01-1.06 1.06 5 5 0 010-7.07.75.75 0 011.06 0zM11 10a1 1 0 11-2 0 1 1 0 012 0z" />
                        </svg>
                        <span class="text-teal-200 tracking-widest">{{ $movie->premiere->toFormattedDateString() }} (US)</span>
                        •
                        @forelse ($generos as $genre)
                            <a href="{{ $genre->id }}"class="text-pink-200 hover:text-gray-400 hover:border-b hover:border-pink-600">
                                {{ $genre->name }}
                            </a>
                        @empty
                           <p class="text-white text-center">No hay generos</p> 
                        @endforelse
                    </span>
                    {{-- Lista de favoritos, like, score --}}
                    
                    <div class="mt-3">
                        <h3>Sinopsis:</h3>
                        <section class="h-20 overflow-auto">
                            <p class="text-sm">
                                {{$movie->sinopsis}}
                            </p>
                        </section>
                    </div>
                    {{-- Actores --}}
                    <article class="mt-10">
                    <h3 class="text-gray-400 tracking-widest text-2xl mb-3 text-center md:text-left">Actores</h3>
                            <div class="grid grid-cols-3 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 md:gap-x-2">
                                @forelse ($actores as $actor)
                                    <a href="{{ route('actor.show', $actor) }}">
                                        <div class="w-40 bg-white shadow border border-gray-500 hover:border-white mb-3">
                                            {{-- image of profile of actor --}}
                                            <div>
                                                <img class="object-cover object-top" src="{{ asset('storage/actors/'. $actor->fotoActor) }}" alt="foto perfil">
                                            </div>
                                            {{-- data of actor --}}
                                            <div class="p-4 bg-black">
                                                <p class="text-white  text-center text-sm my-1 truncate">
                                                    {{ $actor->name }}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                @empty
                                    <p class="text-white text center">
                                        No hay actores
                                    </p>
                                @endforelse
                            </div>
                        </article>
                        <article>
                            @auth
                                <div class="p-4">
                                    <livewire:create-comment :modelo="$movie"/>
                                </div>
                            @endauth
                            <section class="mt-5 mx-10">
                                <livewire:show-comments :modelo="$movie"/>
                            </section>
                        </article> 
                </article>
            </section>
        </div>
    </div>
</x-app-layout>

