<div class="mt-2">
    <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6">
        @forelse ($animes as $anime )
        <a href="{{ route('anime.show', $anime) }}">
            <div class="w-40 bg-white shadow border border-white mb-3 ">
                {{-- image of profile of actor --}}
                <div>
                    <img class="object-cover object-top" src="{{ asset('storage/perfil/'. $anime->images()->where('destination', 'perfil')->pluck('url')->first()) }}" alt="foto perfil">
                </div>
                {{-- data of actor --}}
                <div class="p-4 bg-black">
                    <p class="text-white  text-center text-sm my-1">
                        {{ $anime->name }}
                    </p>
                </div>
            </div>
        </a>
        @empty
            <p class="text-white">No hay Pelicualas</p>
        @endforelse
    </div>
</div>