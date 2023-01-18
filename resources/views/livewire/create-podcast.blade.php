<div>
    <div x-data="{ modelPodcast: false }">
        <button @click="modelPodcast =!modelPodcast" class="flex ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
            </svg>
        </button>
    
        <div x-show="modelPodcast" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                <div x-cloak @click="modelPodcast = false" x-show="modelPodcast" 
                    x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0" 
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100" 
                    x-transition:leave-end="opacity-0"
                    class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true">
                </div>
    
                <div x-cloak x-show="modelPodcast" 
                    x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left bg-gradient-to-r from-red-900 via-black to-black transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                    <div class="flex items-center justify-between space-x-4">
                        <h1 class="text-xl font-medium text-gray-200 capitalize">Registrar una nueva podcast</h1>
    
                        <button @click="modelPodcast = false" class="text-gray-300 focus:outline-none hover:text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>
                    </div>
    
                    <p class="mt-2 text-sm text-gray-300 mb-2">
                        Registra tus podcasts favoritos
                    </p>
    
                    <form class="mt-5" wire:submit.prevent='savePodcast' enctype="multipart/form-data">
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
                        <div class="mt-2">
                            <label for="user name" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Nombre:</label>
                            <input placeholder="Seven" type="text" wire:model="name" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
    
                        <section class="grid grid-cols-2 gap-x-2 mt-4">
                            <div>
                                <label for="chapters" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Capitulos:</label>
                                <input  type="number" wire:model="chapters" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                <x-input-error :messages="$errors->get('chapters')" class="mt-2" />
                            </div>
                            <div>
                                <label for="score" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Calificación:</label>
                                <input placeholder="9.99" wire:model="score" type="number" step="any" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                <x-input-error :messages="$errors->get('score')" class="mt-2" />
                            </div>
                        </section>
                        <div class="mt-2">
                            <label for="authors" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Autores:</label>
                            <textarea id="authors" wire:model="authors" cols="20" rows="2" placeholder="Pepito Pérez..."
                            class="w-full text-black border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"></textarea>
                            <x-input-error :messages="$errors->get('authors')" class="mt-2" />
                        </div>
                        <section class="mt-2">
                            <label for="description" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Descripción del podcast:</label>
                            <textarea id="description" wire:model="description" cols="20" rows="3" placeholder="Sinapsis"
                            class="w-full text-black border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"></textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </section>
                        <div class="mt-2">
                            <label for="url" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Url de la pagina del podcast:</label>
                            <input placeholder="https://www.namePage.com/equipo" type="text" wire:model="url" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            <x-input-error :messages="$errors->get('url')" class="mt-2" />
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
                            <x-primary-button class="w-full justify-center" @click="modelPodcast = {{ !empty($errors->any()) ? 'false' : 'true'}}">
                                {{ __('Registrar pelicula') }}
                            </x-primary-button>
                        </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
</div> 

