<div>
    <div x-data="{ modelActor: false }">
        <button @click="modelActor =!modelActor">
            <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
            </svg>
        </button>
    
        <div x-show="modelActor" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                <div x-cloak @click="modelActor = false" x-show="modelActor" 
                    x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0" 
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100" 
                    x-transition:leave-end="opacity-0"
                    class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true">
                </div>
    
                <div x-cloak x-show="modelActor" 
                    x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all text-white bg-gradient-to-r from-purple-900 to-black transform rounded-lg shadow-xl 2xl:max-w-2xl">
                    <div class="flex items-center justify-between space-x-4">
                        <h1 class="text-xl font-medium text-gray-200 ">Registrar una nueva Actor</h1>
    
                        <button @click="modelActor = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>
                    </div>
    
                    <p class="mt-2 text-sm text-gray-300 ">
                        Add your teammate to your team and start work to get things done
                    </p>
    
                    <form class="mt-5" wire:submit.prevent='saveActor' enctype="multipart/form-data">
                        <div>
                            <label for="user name" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Nombre:</label>
                            <input placeholder="Arthur Melo" wire:model="name" type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
    
                        <div>
                            <x-input-label for="biografia" class="text-gray-200 mt-3" />
                            <textarea id="biografia" wire:model="biografia" cols="20" rows="10" placeholder="Biografia del actor"
                            class="w-full text-black border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"></textarea>
                            <x-input-error :messages="$errors->get('biografia')" class="mt-2" />
                        </div>
                        
                        <div>
                            <x-input-label for="fotoActor"/>
                            <x-text-input id="fotoActor" class="block mt-1 w-full" type="file" accept="image/*" wire:model="fotoActor"/>
                            <div class="my-5 w-80 flex items-center">
                                @if ($fotoActor)
                                    <img src="{{ $fotoActor->temporaryUrl() }}" alt="">
                                @endif
                            </div>
                            <x-input-error :messages="$errors->get('fotoActor')" class="mt-2" />
                        </div>
                        
                        <div class="flex justify-end mt-6">
                            <x-primary-button class="w-full justify-center" @click="modelActor = {{ !empty($errors->any()) ? 'false' : 'true'}}">
                                {{ __('Registrar genero') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 
</div>
