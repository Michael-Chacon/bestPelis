<div>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-x-2">
        @forelse ($actors as $actor)
            <div class="bg-gradient-to-r from-red-900 via-black to-black text-white flex mb-2 justify-between items-center rounded-full py-1 px-4 font-medium border border-white">
                <span class="">
                    <img class="border border-gray-500 object-cover h-10 w-10 rounded-full" src="{{ asset('storage/actors/'. $actor->fotoActor) }}" alt="">
                </span>
                <span class="text-center">
                    <a href="{{ route('actor.show', $actor) }}" class="text-sm hover:text-pink-400">
                        {{ $actor->name }}
                    </a>
                </span>
                <span class="hover:text-red-700">
                    <button wire:click="$emit('mostrarAlertActor', {{ $actor->id }})">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </span>                              
            </div>
        @empty
        <p class="flex capitalize text-center justify-center flex-1 p-5 bg-white text-black">No hay actores registrados</p>
        @endforelse
    </div>
</div>

@push('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Livewire.on('mostrarAlertActor', actorId => {
            Swal.fire({
                title: '¿Eliminar actor?',
                text: "Un actor eliminada no se puede recuperar!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, eliminar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
            if (result.isConfirmed) {
                    // Eliminar vacante desde el componente
                    Livewire.emit('eliminarActor', actorId),
                    Swal.fire(
                    'Eliminada!',
                    'El actor a sido eliminada.',
                    'success'
                    )
            }
            })
        })
    </script>
@endpush
