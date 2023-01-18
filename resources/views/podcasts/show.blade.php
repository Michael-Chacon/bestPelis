<x-app-layout>
    <div class="overflow-hidden shadow-sm ">
        <div class="container mx-auto mt-5">
            <section class="grid grid-cols-4 mb-10 gap-x-4">
                <article class="col-span-4 md:col-span-2">
                    <img class="border border-gray-500 rounded-xl mb-5 "src="{{ asset('storage/perfil/' . $podcast->images()->where('destination', 'perfil')->pluck('url')->first()) }}"
                        alt="">
                        <section class="flex justify-center mb-3">
                            @if ($podcast->status === 'si')
                                <p class="flex border border-gray-500 w-full py-2 gap-x-3 justify-center text-green-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.348 14.651a3.75 3.75 0 010-5.303m5.304 0a3.75 3.75 0 010 5.303m-7.425 2.122a6.75 6.75 0 010-9.546m9.546 0a6.75 6.75 0 010 9.546M5.106 18.894c-3.808-3.808-3.808-9.98 0-13.789m13.788 0c3.808 3.808 3.808 9.981 0 13.79M12 12h.008v.007H12V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                    </svg>
                                    En Emisión
                                </p>
                            @else
                                <p class="flex border border-gray-500 w-full py-2 gap-x-3 justify-center text-red-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 3l8.735 8.735m0 0a.374.374 0 11.53.53m-.53-.53l.53.53m0 0L21 21M14.652 9.348a3.75 3.75 0 010 5.304m2.121-7.425a6.75 6.75 0 010 9.546m2.121-11.667c3.808 3.807 3.808 9.98 0 13.788m-9.546-4.242a3.733 3.733 0 01-1.06-2.122m-1.061 4.243a6.75 6.75 0 01-1.625-6.929m-.496 9.05c-3.068-3.067-3.664-7.67-1.79-11.334M12 12h.008v.008H12V12z" />
                                    </svg>                                      
                                    Emisión finalizada 
                                </p>
                            @endif
                        </section>
                </article>
                <article class="col-span-4 md:col-span-2 pt-5 text-white">
                    <h1 class="text-3xl  text-center  lg:text-5xl md:text-left capitalize ">{{ $podcast->name }}</h1>
                        <a target="_blank" class="flex items-center text-md tracking-widest gap-x-2 text-green-400" href="{{ $podcast->url }}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path d="M12.232 4.232a2.5 2.5 0 013.536 3.536l-1.225 1.224a.75.75 0 001.061 1.06l1.224-1.224a4 4 0 00-5.656-5.656l-3 3a4 4 0 00.225 5.865.75.75 0 00.977-1.138 2.5 2.5 0 01-.142-3.667l3-3z" />
                                <path d="M11.603 7.963a.75.75 0 00-.977 1.138 2.5 2.5 0 01.142 3.667l-3 3a2.5 2.5 0 01-3.536-3.536l1.225-1.224a.75.75 0 00-1.061-1.06l-1.224 1.224a4 4 0 105.656 5.656l3-3a4 4 0 00-.225-5.865z" />
                            </svg>
                            <span class="text-sm">Spotify</span>
                        </a>
                    {{-- premiere, genre  --}}
                    <span class="flex gap-x-2 mt-2 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-5 h-5 fill-teal-200">
                            <path
                                d="M16.364 3.636a.75.75 0 00-1.06 1.06 7.5 7.5 0 010 10.607.75.75 0 001.06 1.061 9 9 0 000-12.728zM4.697 4.697a.75.75 0 00-1.061-1.06 9 9 0 000 12.727.75.75 0 101.06-1.06 7.5 7.5 0 010-10.607z" />
                            <path
                                d="M12.475 6.465a.75.75 0 011.06 0 5 5 0 010 7.07.75.75 0 11-1.06-1.06 3.5 3.5 0 000-4.95.75.75 0 010-1.06zM7.525 6.465a.75.75 0 010 1.06 3.5 3.5 0 000 4.95.75.75 0 01-1.06 1.06 5 5 0 010-7.07.75.75 0 011.06 0zM11 10a1 1 0 11-2 0 1 1 0 012 0z" />
                        </svg>
                        <span class="text-teal-200 tracking-widest">País</span>
                        •
                        <span class="text-yellow-500 ">
                            {{ $podcast->chapters }} @choice('Capitulo|Capitulos', $podcast->chapters ) 
                        </span>
                        •
                        @forelse ($generos as $genre)
                            <a href="{{ $genre->id }}"class="text-blue-400 hover:text-white hover:border-b hover:border-pink-600">
                                {{ $genre->name }} 
                            </a>
                            <span class="text-gray-600">|</span>
                        @empty
                           <p class="text-white text-center">No hay generos</p> 
                        @endforelse
                    </span>
                    {{-- Lista de favoritos, like, score --}}
                    <section class="flex gap-x-5   text-white items-center md:gap-x-5">
                        <div class="border border-gray-600 bg-gradient-to-r from-indigo-900 via-black to-black rounded-full p-3 flex items-center gap-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>
                            <span class="text-sm">{{ $podcast->score }} /<small>10</small></span>
                        </div>
                        @auth    
                            <div class="border border-gray-600 bg-gradient-to-r from-purple-900 via-black to-black hover:from-purple-900 hover:via-purple-800 hover:to-black rounded-full p-3 gap-x-2">
                                <livewire:like-podcast :podcast="$podcast"/>
                            </div>
                            <div class="border border-gray-600 bg-gradient-to-r from-pink-900 via-black to-black hover:from-pink-900 hover:via-pink-800 hover:to-black rounded-full p-3">
                                <livewire:favorite-podcast :podcast="$podcast" />
                            </div>
                        @endauth
                    </section>
                    <div class="mt-3">
                        <h3>Sinopsis:</h3>
                        <section class="">
                            <p class="text-justify">
                                {{$podcast->description}}
                            </p>
                            <article class="mt-5 justify-end">
                                <span class="flex justify-end text-pink-500 text-sm capitalize tracking-widest">{{ $podcast->authors }}</span>
                                <samll class="flex justify-end text-gray-400 text-sm">Autores</samll>
                            </article>
                        </section>
                    </div>
                </article>
            </section>
            <section class="grid grid-cols-2 mt-5 mb-10 md:gap-x-3">
                <section class="col-span-2 md:col-span-1">
                    <iframe class="w-full aspect-video border border-gray-500" 
                        src="https://www.youtube.com/embed/5bTlOlZGgtM?controls=0" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                    </iframe> 
                </section>
                <section class="col-span-2 md:col-span-1">
                    <article>
                        @auth
                            <div class="p-4">
                                <livewire:create-comment :modelo="$podcast"/>
                            </div>
                        @endauth
                        <section class="mt-5 mx-10">
                            <livewire:show-comments :modelo="$podcast"/>
                        </section>
                    </article>
                </section>
            </section>
        </div>
    </div>
</x-app-layout>
