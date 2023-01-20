<x-app-layout>
    <section class="container mx-auto mt-5">
        @forelse ($podcasts as $podcast)
        <section class="grid grid-cols-3 ">
            <article class="col-span-1">
                <img src="{{ asset('storage/perfil/' . $podcast->images()->pluck('url')->first()) }}" alt="">
            </article>
            <article class="col-span-2">
                <p class="text-white">
                    {{ $podcast->name }}
                </p>
            </article>
        </section>
        @empty
            <p class="text white text-xl text-center">
                NO hay Podcasts registrados
            </p>
        @endforelse
    </section>
</x-app-layout>
