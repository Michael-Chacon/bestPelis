<x-app-layout>
    <x-slot name="header">
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
                    <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42" />
                    </svg>                      
                </article>
                <article class="bg-gradient-to-r from-red-900 via-black to-black rounded-full p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                    </svg>
                </article>
                <article class="bg-gradient-to-r from-red-900 via-black to-black rounded-full p-3">
                    {{-- modal of create actors --}}
                    <livewire:create-actor/>                    
                </article> 
                <article class="bg-gradient-to-r from-red-900 via-black to-black rounded-full p-3">
                    {{-- modal of create generos --}}
                    <livewire:create-genre/>                      
                </article>
            </div>
        </section>
    </x-slot>
    <div class="container mx-auto py-5">
        <section class="">
            <article class="text-white overflow-hidden shadow-sm  grid grid-cols-1 md:grid-cols-4">

                <div class="border-r border-red-200 p-3 col-span-3">
                    <h2 class="text-2xl text-gray-200 text-center mt-3 mb-3">Actores</h2>
                    <livewire:show-actor/>
                </div>

                <div class="border-l border-red-200 p-3 col-span-1">
                    <h2 class="text-2xl text-gray-200 text-center mt-3 mb-3">Generos</h2>
                        <livewire:show-genre/>
                </div>

            </article>
        </section>
        <section class="mt-10 grid">
            <h2 class="text-2xl  text-gray-300 text-center capitalize">Ultimas peliculas registradas</h2>  
                <livewire:show-movie/>
            
        </section>
        <section class="mt-10 grid">
            <h2 class="text-2xl  text-gray-300 text-center capitalize">Ultimas series registradas</h2>  
                <livewire:latest-series/>
            
        </section>
    </div>
  

</x-app-layout>