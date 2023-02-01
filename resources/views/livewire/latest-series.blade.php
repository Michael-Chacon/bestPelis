<div class="mt-2 overflow-auto">
    <div class="flex gap-x-5">
        @forelse ($series as $serie )
        <a href="{{ route('series.show', $serie) }}">
            <div class="w-40 bg-white shadow border border-white hover:border-pink-500 mb-3 ">
                {{-- image of profile of actor --}}
                <div>
                    <img class="object-cover object-top" src="{{ asset('storage/perfil/'. $serie->images->where('destination', 'perfil')->pluck('url')->first()) }}" alt="foto perfil">
                </div>
                {{-- data of actor --}}
                <div class="p-4 bg-black">
                    <p class="text-white  text-center text-sm my-1">
                        {{ $serie->name }}
                    </p>
                </div>
            </div>
        </a>
        @empty
            <p class="text-white">No hay Pelicualas</p>
        @endforelse
    </div>
</div>