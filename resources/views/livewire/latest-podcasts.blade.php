<div class="mt-2 overflow-auto">
    <div class="flex gap-x-5">
        @forelse ($podcasts as $podcast )
        <a href="{{ route('podcast.show', $podcast) }}">
            <div class="w-40 bg-white shadow border border-white hover:border-pink-500 mb-3 ">
                {{-- image of profile of actor --}}
                <div>
                    <img class="object-cover object-top" src="{{ asset('storage/perfil/'. $podcast->images->where('destination', 'perfil')->pluck('url')->first()) }}" alt="foto perfil">
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
