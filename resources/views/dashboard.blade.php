<x-app-layout>
    <x-slot name="header">
        {{-- Menu con los madals --}}
        <section class="container">
            <div class="flex justify-between items-center">
                <article class="bg-gradient-to-r from-red-900 via-black to-black rounded-full p-3">
                 {{-- Modal to create movies  --}}
                <livewire:create-peli /> 
                </article>
                <article  class="bg-gradient-to-r from-red-900 via-black to-black rounded-full p-3">
                    {{-- modal to create series --}}
                    <livewire:creat-serie/>                  
                </article>
                <article class="bg-gradient-to-r from-red-900 via-black to-black rounded-full p-3">
                    <livewire:create-anime/>                      
                </article>
                <article class="bg-gradient-to-r from-red-900 via-black to-black rounded-full p-3">
                    <livewire:create-podcast/>
                </article>
                <article class="bg-gradient-to-r from-red-900 via-black to-black rounded-full p-3">
                    {{-- modal of create actors --}}
                    <livewire:create-actor/>                    
                </article> 
                <article class="bg-gradient-to-r from-red-900 via-black to-black rounded-full p-3">
                    {{-- modal of create actors --}}
                    <livewire:platform-component/>                    
                </article> 
                <article class="bg-gradient-to-r from-red-900 via-black to-black rounded-full p-3">
                    {{-- modal of create generos --}}
                    <livewire:create-genre/>                      
                </article>
            </div>
        </section>
    </x-slot>
    <div class="container mx-auto py-5">
        <section class="flex justify-center items-center">
            <livewire:show-platforms/>
        </section>
        <section class="">
            <article class="text-white overflow-hidden shadow-sm  grid grid-cols-1 md:grid-cols-4">

                <div class="p-3 col-span-3 order-2 md-order-1">
                    <h2 class="text-2xl text-gray-200 text-center mt-3 mb-3">Actores</h2>
                    <livewire:show-actor/>

                    <section class="mt-10 grid">
                        <h2 class="text-2xl  text-gray-300 text-center capitalize">Ultimas peliculas registradas</h2>  
                            <livewire:show-movie/>
                        
                    </section>
                    <section class="mt-10 grid">
                        <h2 class="text-2xl  text-gray-300 text-center capitalize">Ultimas series registradas</h2>  
                            <livewire:latest-series/>
                    </section>
                    <section class="mt-10 grid">
                        <h2 class="text-2xl  text-gray-300 text-center capitalize">Ultimos animes registrados</h2>  
                            <livewire:latest-animes/>
                    </section>
                    <section class="mt-10 grid">
                        <h2 class="text-2xl  text-gray-300 text-center capitalize">Ultimos podcasts registrados</h2>  
                            <livewire:latest-podcasts/>
                    </section>
                </div>

                <div class=" p-3 col-span-1 order-1 md:order-2">
                    <h2 class="text-2xl text-gray-200 text-center mt-3 mb-3">Generos</h2>
                        <livewire:show-genre/>
                </div>

            </article>
        </section>
    </div>
  
</x-app-layout>