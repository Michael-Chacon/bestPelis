<x-app-layout>
    <section class="container mx-auto mt-5 text-white">
        <section class="grid grid-cols-2 gap-3">
            @forelse ($podcasts as $podcast)
            <a href="{{ route('podcast.show', $podcast) }}" class="col-span-2 lg:col-span-1 bg-gradient-to-t from-black via-black to-red-900 rounded-xl">
                <section class="grid grid-cols-5 items-start gap-x-5">
                    <article class="col-span-2">
                        <img class="h-52 w-full object-fill" src="{{ asset('storage/perfil/' . $podcast->images->pluck('url')->first()) }}" alt="">
                    </article>
                    <article class="col-span-3 pt-16 text-center">
                        <p class="text-white text-center text-3xl mb-2">
                            {{ $podcast->name }}
                        </p>
                        @forelse ($podcast->genres()->pluck('name') as $genero)     
                        <span class="bg-purple-100 text-purple-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-purple-900 dark:text-white">
                            {{ $podcast->genres->pluck('name')->first() }}
                        </span>
                        @empty
                            
                        @endforelse
                    </article>
                </section>
            </a>
            @empty
            <p class="text white text-xl text-center">
                NO hay Podcasts registrados
            </p>
            @endforelse
        </section>
    </section>
</x-app-layout>
