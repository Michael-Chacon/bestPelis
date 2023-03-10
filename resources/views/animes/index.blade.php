<x-app-layout>
    <div class="container mx-auto mt-10">
        <div class="max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm">
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
                    @forelse ($animes as $anime)
                        <div class="w-56 mb-2 border border-gray-500 hover:border-white">
                        <div class="h-80  object-conver flex flex-col justify-between  items-start p-4 bg-cover bg-center"
                            style="background-image: url(' {{ asset('storage/perfil/' . $anime->images->where('destination', 'perfil')->pluck('url')->first()) }}')">
                            <div class="w-8 h-9  rounded flex items-center justify-center text-purple-400 hover:text-pink-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42" />
                                  </svg>
                                  
                            </div>
                            @auth
                                {{-- Botton like --}}
                                <div class="flex px-1 text-white bg-black bg-opacity-60 border-b-2 border-gray-400">
                                    <livewire:like-component :modelo='$anime'/>
                                </div>
                            @endauth
                        </div>
                        <a href="{{ route('anime.show', $anime) }}">
                            <div
                                class="p-4 bg-black hover:bg-gradient-to-r  hover:from-red-900 hover:via-black hover:to-black text-white">
                                <h1 class="truncate font-medium text-center capitalize">
                                    {{ $anime->name }}
                                </h1>
                                <div class="flex justify-center items-center gap-x-5">
                                    <div class="text-center text-sm text-gray-400">
                                        <div class="flex justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" class="w-4 h-4">
                                                <path
                                                    d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z" />
                                                <path fill-rule="evenodd"
                                                    d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <span class="tracking-widest text-xs">
                                            {{ $anime->premiere->format('Y') }}
                                        </span>
                                    </div>
                                    <div class="text-center text-sm text-gray-400">
                                        <div class="flex justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" class="w-4 h-4">
                                                <path fill-rule="evenodd"
                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <span class="text-xs">
                                            {{ $anime->score }}/10
                                        </span>
                                    </div>
                                    @auth
                                    <div class="text-center">
                                        <div class="flex justify-center">
                                            <livewire:seen-component :modelo='$anime' />
                                        </div>
                                    </div>
                                    @endauth
                                </div>
                            </div>
                        </a>
                        </div>
                    @empty
                        <p class="text-white text-center text-lg">
                            No hay peliculas registradas
                        </p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
