<div class="mt-2">
    <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6">
        @forelse ($podcasts as $podcast )
        <a href="{{ route('podcast.show', $podcast) }}">
            <div class="w-40 bg-white shadow border border-white mb-3 ">
                {{-- image of profile of actor --}}
                <div>
                    <img class="object-cover object-top" src="{{ asset('storage/perfil/'. $podcast->images()->where('destination', 'perfil')->pluck('url')->first()) }}" alt="foto perfil">
                </div>
                {{-- data of actor --}}
                <div class="p-4 bg-black">
                    <p class="text-white  text-center text-sm my-1">
                        {{ $podcast->name }}
                    </p>
                </div>
            </div>
        </a>
        @empty
            <p class="text-white">No hay Podcast</p>
        @endforelse
    </div>
</div>
