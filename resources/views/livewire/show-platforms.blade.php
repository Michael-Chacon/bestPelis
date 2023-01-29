<div class="flex gap-x-5">
    @forelse ( $platforms as $platform )
        <article class="flext flex-col text-center ">
            <img class="object-fill w-20 h-20 rounded-full border border-gray-400" src="{{ asset('storage/platform/'. $platform->image) }}" alt="">
            <p class="text-white">
                {{ $platform->platform }}
            </p>
        </article>
    @empty
        <p class="text-white text-center">
            No hay plataformas registradas
        </p>
    @endforelse
</div>
