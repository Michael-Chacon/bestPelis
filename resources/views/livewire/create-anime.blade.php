<div>
    <div x-data="{ modelAnime: false }">
        <button @click="modelAnime =!modelAnime" class="flex ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42" />
            </svg>
        </button>
    
        <div x-show="modelAnime" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                <div x-cloak @click="modelAnime = false" x-show="modelAnime" 
                    x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0" 
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100" 
                    x-transition:leave-end="opacity-0"
                    class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true">
                </div>
    
                <div x-cloak x-show="modelAnime" 
                    x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left bg-gradient-to-r from-red-900 via-black to-black transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                    <div class="flex items-center justify-between space-x-4">
                        <h1 class="text-xl font-medium text-gray-200 capitalize">Registrar una nueva pel??cula</h1>
    
                        <button @click="modelAnime = false" class="text-gray-300 focus:outline-none hover:text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>
                    </div>
    
                    <p class="mt-2 text-sm text-gray-300 mb-2">
                        Registra tus pel??culas favoritas
                    </p>
    
                    <form class="mt-5" wire:submit.prevent='saveAnime' enctype="multipart/form-data">
                        <section class="grid grid-cols-1">
                            @if ($portada)
                                <img class="object-cover object-top h-44 w-full" src="{{ $portada->temporaryUrl() }}" alt="">
                            @endif
                        </section>
                        <section class="grid grid-cols-1">
                            @if ($perfil)
                                <img class="object-cover object-top w-32 -mt-20 border border-white" src="{{ $perfil->temporaryUrl() }}" alt="">
                            @endif
                        </section>
                        <div class="mb-3">
                            <x-input-label for="perfil"/> 
                            <span class="text-gray-300">Foto de perfil:</span>
                            <x-text-input id="perfil" class="block w-full text-gray-400" type="file" accept="image/*" wire:model="perfil"/>
                            <x-input-error :messages="$errors->get('perfil')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="portada"/> 
                            <span class="text-gray-300">Foto de portada:</span>
                            <x-text-input id="portada" class="block w-full text-gray-400" type="file" accept="image/*" wire:model="portada"/>
                            <x-input-error :messages="$errors->get('portada')" class="mt-2" />
                        </div>
                        <div class="mt-5">
                            <label for="user name" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Nombre:</label>
                            <input placeholder="Seven" type="text" wire:model="name" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
    
                        <section class="grid grid-cols-2 gap-x-2 mt-4">
                            <div>
                                <label for="date" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Fecha de estreno:</label>
                                <input  type="date" wire:model="premiere" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                <x-input-error :messages="$errors->get('premiere')" class="mt-2" />
                            </div>
                            <div>
                                <label for="score" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Calificaci??n:</label>
                                <input placeholder="9.99" wire:model="score" type="number" step="any" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                <x-input-error :messages="$errors->get('score')" class="mt-2" />
                            </div>
                        </section>
                        <section class="grid grid-cols-2 gap-x-2 mt-4">
                            <div>
                                <label for="seasons" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Temporadas:</label>
                                <input  type="number" wire:model="seasons" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                <x-input-error :messages="$errors->get('seasons')" class="mt-2" />
                            </div>
                            <div>
                                <label for="score" class="block mb-2 mt-1 text-sm text-gray-700 capitalize dark:text-gray-200">En emisi??n:</label>
                                <div class="flex items-center">
                                    <input id="country-option-1" type="radio" wire:model="status" value="si" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="country-option-1" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                      Si
                                    </label>
                                  </div>
                                
                                  <div class="flex items-center">
                                    <input id="country-option-2" type="radio" wire:model="status" value="no" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="country-option-2" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                      No
                                    </label>
                                  </div>
                                <x-input-error :messages="$errors->get('status')" class="mt-2" />
                            </div>
                        </section>
                        <section class="mt-4">
                            <x-input-label for="sinopsis" class="text-gray-200 mt-3" />
                            <textarea id="sinopsis" wire:model="sinopsis" cols="20" rows="3" placeholder="Sinapsis"
                            class="w-full text-black border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"></textarea>
                            <x-input-error :messages="$errors->get('sinopsis')" class="mt-2" />
                        </section>
                        <article class="grid grid-cols-2 mt-4">
                            <div>
                                <h3 class="text-lg text-gray-200 text-center">Generos</h3>

                                <div class="mb-4">
                                    <x-input-error :messages="$errors->get('genres')" class="mt-2" />
                                    @forelse ($generos   as $name => $id)
                                        <div class="flex-1">     
                                            <input id="default-checkbox.{{ $name }}" wire:model="genres.{{ $id }}" type="checkbox" value="{{ $id }}" class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="default-checkbox.{{ $name }}" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $name}}</label>
                                        </div>
                                    @empty
                                        <p class="text-md text-gray-400 text-center">No hay generos</p>
                                    @endforelse
                                </div>

                            </div>
                        </article>
                        <div class="flex justify-end mt-6">
                            <x-primary-button class="w-full justify-center" @click="modelAnime = {{ !empty($errors->any()) ? 'false' : 'true'}}">
                                {{ __('Registrar pelicula') }}
                            </x-primary-button>
                        </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
</div> 

