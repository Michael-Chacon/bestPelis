<div>
    @forelse ($comentarios as $comentario)
    <article class="grid grid-cols-4 p-3  w-full items-center border border-gray-500 mb-5 rounded-xl">
        <section class="col-span-3 w-full">
            <h3 class="text-sm flex gap-x-1 items-center text-teal-500 capitalize">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-5.5-2.5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zM10 12a5.99 5.99 0 00-4.793 2.39A6.483 6.483 0 0010 16.5a6.483 6.483 0 004.793-2.11A5.99 5.99 0 0010 12z" clip-rule="evenodd" />
                </svg>
              {{ $comentario->user->name }}
            </h3>
            <h2 class="text-white text-lg ml-5">{{ $comentario->comment }}</h2>
            <small class="ml-5 text-purple-400" >{{ $comentario->created_at->diffForHumans() }}</small>
        </section>  
        <section class="col-span-1 flex justify-end text-white hover:text-red-500">
            @if ($comentario->user_id == auth()->user()->id)
                <button wire:click="$emit('mostrarAlerta', {{ $comentario}})">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                </svg>  
            </button>            
            @endif
        </section>   
    </article>
            @empty
            <p class="text-white">No hay comentarios</p>
        @endforelse
</div>

@push('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Livewire.on('mostrarAlerta', comentario => {
            Swal.fire({
                title: '¿Eliminar vacante?',
                text: "Una vacante eliminada no se puede recuperar!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, eliminar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
            if (result.isConfirmed) {
                    // Eliminar vacante desde el componente
                    Livewire.emitTo('show-comments', 'eliminarComentario', comentario),
                    Swal.fire(
                    'Eliminada!',
                    'La vacante a sido eliminada.',
                    'success'
                    )
            }
            })
        })
    </script>
@endpush
