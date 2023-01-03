<x-app-layout>
    <p class="text-white">{{ $actor->name }}</p>
    <img src="{{ asset('storage/actors/'. $actor->fotoActor) }}" alt="">
</x-app-layout>