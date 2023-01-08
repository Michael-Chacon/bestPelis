<div>
    <div x-data="{ modelSerie: false }">
        <button @click="modelSerie =!modelSerie" class="flex text-white hover:text-gray-500">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 fill:bg-white">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h1.5C5.496 19.5 6 18.996 6 18.375m-3.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-1.5A1.125 1.125 0 0118 18.375M20.625 4.5H3.375m17.25 0c.621 0 1.125.504 1.125 1.125M20.625 4.5h-1.5C18.504 4.5 18 5.004 18 5.625m3.75 0v1.5c0 .621-.504 1.125-1.125 1.125M3.375 4.5c-.621 0-1.125.504-1.125 1.125M3.375 4.5h1.5C5.496 4.5 6 5.004 6 5.625m-3.75 0v1.5c0 .621.504 1.125 1.125 1.125m0 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m1.5-3.75C5.496 8.25 6 7.746 6 7.125v-1.5M4.875 8.25C5.496 8.25 6 8.754 6 9.375v1.5m0-5.25v5.25m0-5.25C6 5.004 6.504 4.5 7.125 4.5h9.75c.621 0 1.125.504 1.125 1.125m1.125 2.625h1.5m-1.5 0A1.125 1.125 0 0118 7.125v-1.5m1.125 2.625c-.621 0-1.125.504-1.125 1.125v1.5m2.625-2.625c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125M18 5.625v5.25M7.125 12h9.75m-9.75 0A1.125 1.125 0 016 10.875M7.125 12C6.504 12 6 12.504 6 13.125m0-2.25C6 11.496 5.496 12 4.875 12M18 10.875c0 .621-.504 1.125-1.125 1.125M18 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m-12 5.25v-5.25m0 5.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125m-12 0v-1.5c0-.621-.504-1.125-1.125-1.125M18 18.375v-5.25m0 5.25v-1.5c0-.621.504-1.125 1.125-1.125M18 13.125v1.5c0 .621.504 1.125 1.125 1.125M18 13.125c0-.621.504-1.125 1.125-1.125M6 13.125v1.5c0 .621-.504 1.125-1.125 1.125M6 13.125C6 12.504 5.496 12 4.875 12m-1.5 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M19.125 12h1.5m0 0c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h1.5m14.25 0h1.5" />
            </svg> 
        </button>
    
        <div x-show="modelSerie" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                <div x-cloak @click="modelSerie = false" x-show="modelSerie" 
                    x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0" 
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100" 
                    x-transition:leave-end="opacity-0"
                    class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true">
                </div>
    
                <div x-cloak x-show="modelSerie" 
                    x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all bg-gradient-to-r from-red-900 via-black to-black transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                    <div class="flex items-center justify-between space-x-4">
                        <h1 class="text-xl font-medium text-gray-200 capitalize">Registrar una nueva serie</h1>
    
                        <button @click="modelSerie = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>
                    </div>
    
                    <p class="mt-2 text-sm text-gray-300 ">
                        Registra tus series favoritas
                    </p>
    
                    <form class="mt-5" wire:submit.prevent='saveSerie' enctype="multipart/form-data">
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
                        <div class="mt-5">
                            <label for="nameEn" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Nombre original:</label>
                            <input placeholder="Dark" type="text" wire:model="nameEn" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            <x-input-error :messages="$errors->get('nameEn')" class="mt-2" />
                        </div>
                        <section class="grid grid-cols-2 gap-x-2 mt-4">
                            <div>
                                <label for="date" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Fecha de estreno:</label>
                                <input  type="date" wire:model="premiere" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                <x-input-error :messages="$errors->get('premiere')" class="mt-2" />
                            </div>
                            <div>
                                <label for="score" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Calificación:</label>
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
                                <label for="score" class="block mb-2 mt-1 text-sm text-gray-700 capitalize dark:text-gray-200">En emisión:</label>
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
                                <h3 class="text-lg text-gray-200 text-center">Actores</h3>
                                
                                <div class="mb-4">
                                    <x-input-error :messages="$errors->get('actors')" class="mt-2" />
                                    @forelse ($actores   as $name => $id)
                                        <div class="flex-1">     
                                            <input id="default-checkbox.{{ $name }}" wire:model="actors.{{ $id }}]" type="checkbox" value="{{ $id }}" class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="default-checkbox.{{ $name }}" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $name}}</label>
                                        </div>
                                    @empty
                                        <p class="text-md text-gray-400 text-center">No hay actores</p>
                                    @endforelse
                                </div>

                            </div>
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
                            <x-primary-button class="w-full justify-center" @click="modelMovie = {{ !empty($errors->any()) ? 'false' : 'true'}}">
                                {{ __('Registrar serie') }}
                            </x-primary-button>
                        </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div> 
