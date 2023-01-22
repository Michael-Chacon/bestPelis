<x-app-layout>
    <section class="container mx-auto mt-5 text-white">
        <section class="grid grid-cols-2 gap-3">
            @forelse ($podcasts as $podcast)
            <article  class="col-span-2 lg:col-span-1 bg-gradient-to-t from-black via-black to-red-900 rounded-xl">
                <section class="grid grid-cols-5 items-start gap-x-5">
                    <article class="col-span-2">
                        <a href="{{ route('podcast.show', $podcast) }}">
                            <img class="h-52 w-full object-fill" src="{{ asset('storage/perfil/' . $podcast->images->pluck('url')->first()) }}" alt="imagen {{ $podcast->name }}">
                        </a>
                    </article>
                    <article class="col-span-3  text-center">
                        <section class="grid grid-cols-4 justify-end items-center mb-10 m-2">
                            <article class="col-span-3 col-start-3 flex items-center justify-end gap-x-2" >
                                @auth    
                                <div class="col-start-3 w-10 border border-gray-600 bg-gradient-to-r from-purple-900 via-black to-black hover:from-purple-900 hover:via-purple-800 hover:to-black rounded-full p-1">
                                    <livewire:like-component :modelo='$podcast'/>
                                </div>
                                @endauth
                                <div class="border border-gray-600 bg-gradient-to-r from-indigo-900 via-black to-black rounded-full p-1 flex items-center gap-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                </svg>
                                <span class="text-sm">{{ $podcast->score }} /<small>10</small></span>
                            </div>
                        </article>
                        </section>
                        <a  href="{{ route('podcast.show', $podcast) }}">
                            <p class="text-white text-center text-3xl mb-2 hover:text-pink-300">
                                {{ $podcast->name }}
                            </p>
                        </a>
                        @forelse ($podcast->genres->pluck('name') as $genero)     
                        <span class="bg-purple-100 text-purple-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-purple-900 dark:text-white">
                            {{ $genero }} 
                        </span>
                        @empty
                            <p class="text-white text-center">
                                No tiene generos
                            </p>
                        @endforelse
                </article>
                </section>
            </article>
            @empty
            <p class="text white text-xl text-center">
                NO hay Podcasts registrados
            </p>
            @endforelse
        </section>
    </section>
</x-app-layout>
