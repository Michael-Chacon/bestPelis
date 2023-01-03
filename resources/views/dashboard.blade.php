<x-app-layout>
    <x-slot name="header">
        <section class="container">
            <div class="flex justify-between items-center">
                <article class="bg-gradient-to-r from-purple-900 via-black to-pink-900 rounded-full p-3">
                 {{-- Modal to create movies  --}}
                <div x-data="{ modelMovie: false }">
                    <button @click="modelMovie =!modelMovie">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                    </svg>
                    </button>
                
                    <div x-show="modelMovie" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                        <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                            <div x-cloak @click="modelMovie = false" x-show="modelMovie" 
                                x-transition:enter="transition ease-out duration-300 transform"
                                x-transition:enter-start="opacity-0" 
                                x-transition:enter-end="opacity-100"
                                x-transition:leave="transition ease-in duration-200 transform"
                                x-transition:leave-start="opacity-100" 
                                x-transition:leave-end="opacity-0"
                                class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true">
                            </div>
                
                            <div x-cloak x-show="modelMovie" 
                                x-transition:enter="transition ease-out duration-300 transform"
                                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                x-transition:leave="transition ease-in duration-200 transform"
                                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                                <div class="flex items-center justify-between space-x-4">
                                    <h1 class="text-xl font-medium text-gray-800 ">Registrar una nueva pelicula</h1>
                
                                    <button @click="modelMovie = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </button>
                                </div>
                
                                <p class="mt-2 text-sm text-gray-500 ">
                                    Add your teammate to your team and start work to get things done
                                </p>
                
                                <form class="mt-5">
                                    <div>
                                        <label for="user name" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Nombre</label>
                                        <input placeholder="Arthur Melo" type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                    </div>
                
                                    <div class="mt-4">
                                        <label for="email" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Teammate email</label>
                                        <input placeholder="arthurmelo@example.app" type="email" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                    </div>
                                    
                                    <div class="mt-4">
                                        <h1 class="text-xs font-medium text-gray-400 uppercase">Permissions</h1>
                
                                        <div class="mt-4 space-y-5">
                                            <div class="flex items-center space-x-3 cursor-pointer" x-data="{ show: true }" @click="show =!show">
                                                <div class="relative w-10 h-5 transition duration-200 ease-linear rounded-full"
                                                    :class="[show ? 'bg-indigo-500' : 'bg-gray-300']">
                                                    <label for="show"
                                                        @click="show =!show"
                                                        class="absolute left-0 w-5 h-5 mb-2 transition duration-100 ease-linear transform bg-white border-2 rounded-full cursor-pointer"
                                                        :class="[show ? 'translate-x-full border-indigo-500' : 'translate-x-0 border-gray-300']"></label>
                                                    <input type="checkbox" name="show" class="hidden w-full h-full rounded-full appearance-none active:outline-none focus:outline-none"/>
                                                </div>
                
                                                <p class="text-gray-500">Can make task</p>
                                            </div>
                
                                            <div class="flex items-center space-x-3 cursor-pointer" x-data="{ show: false }" @click="show =!show">
                                                <div class="relative w-10 h-5 transition duration-200 ease-linear rounded-full"
                                                    :class="[show ? 'bg-indigo-500' : 'bg-gray-300']">
                                                    <label for="show"
                                                        @click="show =!show"
                                                        class="absolute left-0 w-5 h-5 mb-2 transition duration-100 ease-linear transform bg-white border-2 rounded-full cursor-pointer"
                                                        :class="[show ? 'translate-x-full border-indigo-500' : 'translate-x-0 border-gray-300']"></label>
                                                    <input type="checkbox" name="show" class="hidden w-full h-full rounded-full appearance-none active:outline-none focus:outline-none"/>
                                                </div>
                
                                                <p class="text-gray-500">Can delete task</p>
                                            </div>
                
                                            <div class="flex items-center space-x-3 cursor-pointer" x-data="{ show: true }" @click="show =!show">
                                                <div class="relative w-10 h-5 transition duration-200 ease-linear rounded-full"
                                                    :class="[show ? 'bg-indigo-500' : 'bg-gray-300']">
                                                    <label for="show"
                                                        @click="show =!show"
                                                        class="absolute left-0 w-5 h-5 mb-2 transition duration-100 ease-linear transform bg-white border-2 rounded-full cursor-pointer"
                                                        :class="[show ? 'translate-x-full border-indigo-500' : 'translate-x-0 border-gray-300']"></label>
                                                    <input type="checkbox" name="show" class="hidden w-full h-full rounded-full appearance-none active:outline-none focus:outline-none"/>
                                                </div>
                
                                                <p class="text-gray-500">Can edit task</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="flex justify-end mt-6">
                                        <button type="button" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                            Invite Member
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>  
                {{-- end --}}
                </article>
                <article  class="bg-gradient-to-r from-purple-900 via-black to-pink-900 rounded-full p-3">
                    {{-- modal to create series --}}
                    <div x-data="{ modelSerie: false }">
                        <button @click="modelSerie =!modelSerie" class="text-white hover:text-gray-300">
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
                                    class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                                    <div class="flex items-center justify-between space-x-4">
                                        <h1 class="text-xl font-medium text-gray-800 capitalize">Registrar una nueva serie</h1>
                    
                                        <button @click="modelSerie = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </button>
                                    </div>
                    
                                    <p class="mt-2 text-sm text-gray-500 ">
                                        Add your teammate to your team and start work to get things done
                                    </p>
                    
                                    <form class="mt-5">
                                        <div>
                                            <label for="user name" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Nombre</label>
                                            <input placeholder="Arthur Melo" type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                        </div>
                    
                                        <div class="mt-4">
                                            <label for="email" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Teammate email</label>
                                            <input placeholder="arthurmelo@example.app" type="email" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                        </div>
                                        
                                        <div class="mt-4">
                                            <h1 class="text-xs font-medium text-gray-400 uppercase">Permissions</h1>
                    
                                            <div class="mt-4 space-y-5">
                                                <div class="flex items-center space-x-3 cursor-pointer" x-data="{ show: true }" @click="show =!show">
                                                    <div class="relative w-10 h-5 transition duration-200 ease-linear rounded-full"
                                                        :class="[show ? 'bg-indigo-500' : 'bg-gray-300']">
                                                        <label for="show"
                                                            @click="show =!show"
                                                            class="absolute left-0 w-5 h-5 mb-2 transition duration-100 ease-linear transform bg-white border-2 rounded-full cursor-pointer"
                                                            :class="[show ? 'translate-x-full border-indigo-500' : 'translate-x-0 border-gray-300']"></label>
                                                        <input type="checkbox" name="show" class="hidden w-full h-full rounded-full appearance-none active:outline-none focus:outline-none"/>
                                                    </div>
                    
                                                    <p class="text-gray-500">Can make task</p>
                                                </div>
                    
                                                <div class="flex items-center space-x-3 cursor-pointer" x-data="{ show: false }" @click="show =!show">
                                                    <div class="relative w-10 h-5 transition duration-200 ease-linear rounded-full"
                                                        :class="[show ? 'bg-indigo-500' : 'bg-gray-300']">
                                                        <label for="show"
                                                            @click="show =!show"
                                                            class="absolute left-0 w-5 h-5 mb-2 transition duration-100 ease-linear transform bg-white border-2 rounded-full cursor-pointer"
                                                            :class="[show ? 'translate-x-full border-indigo-500' : 'translate-x-0 border-gray-300']"></label>
                                                        <input type="checkbox" name="show" class="hidden w-full h-full rounded-full appearance-none active:outline-none focus:outline-none"/>
                                                    </div>
                    
                                                    <p class="text-gray-500">Can delete task</p>
                                                </div>
                    
                                                <div class="flex items-center space-x-3 cursor-pointer" x-data="{ show: true }" @click="show =!show">
                                                    <div class="relative w-10 h-5 transition duration-200 ease-linear rounded-full"
                                                        :class="[show ? 'bg-indigo-500' : 'bg-gray-300']">
                                                        <label for="show"
                                                            @click="show =!show"
                                                            class="absolute left-0 w-5 h-5 mb-2 transition duration-100 ease-linear transform bg-white border-2 rounded-full cursor-pointer"
                                                            :class="[show ? 'translate-x-full border-indigo-500' : 'translate-x-0 border-gray-300']"></label>
                                                        <input type="checkbox" name="show" class="hidden w-full h-full rounded-full appearance-none active:outline-none focus:outline-none"/>
                                                    </div>
                    
                                                    <p class="text-gray-500">Can edit task</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="flex justify-end mt-6">
                                            <button type="button" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                                Invite Member
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>                   
                </article>
                <article class="bg-gradient-to-r from-purple-900 via-black to-pink-900 rounded-full p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42" />
                    </svg>                      
                </article>
                <article class="bg-gradient-to-r from-purple-900 via-black to-pink-900 rounded-full p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                    </svg>
                </article>
                <article class="bg-gradient-to-r from-purple-900 via-black to-pink-900 rounded-full p-3">
                    {{-- modal of create actors --}}
                    <livewire:create-actor/>                    
                </article> 
                <article class="bg-gradient-to-r from-purple-900 via-black to-pink-900 rounded-full p-3">
                    {{-- modal of create generos --}}
                    <livewire:create-genre/>                      
                </article>
            </div>
        </section>
    </x-slot>
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="text-white overflow-hidden shadow-sm sm:rounded-lg grid grid-cols-2">

                <div class="border-r border-red-200 p-3">
                    <h2 class="text-2xl text-gray-200 text-center mt-3 mb-3">Actores</h2>
                    <livewire:show-actor/>
                </div>

                <div class="border-l border-red-200 p-3">
                    <h2 class="text-2xl text-gray-200 text-center mt-3 mb-3">Generos</h2>
                    <!-- Information label -->
                    <article class="">
                        <livewire:show-genre/>
                    </article>
                </div>

            </div>
        </div>
    </div>
    <!-- component -->
    <div x-data="{ modelOpen: false }">
        <button @click="modelOpen =!modelOpen" class="flex items-center justify-center px-3 py-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
            </svg>
    
            <span>Invite Member</span>
        </button>
    
        <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                <div x-cloak @click="modelOpen = false" x-show="modelOpen" 
                    x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0" 
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100" 
                    x-transition:leave-end="opacity-0"
                    class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true">
                </div>
    
                <div x-cloak x-show="modelOpen" 
                    x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                    <div class="flex items-center justify-between space-x-4">
                        <h1 class="text-xl font-medium text-gray-800 ">Registrar una nueva pelicula</h1>
    
                        <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>
                    </div>
    
                    <p class="mt-2 text-sm text-gray-500 ">
                        Add your teammate to your team and start work to get things done
                    </p>
    
                    <form class="mt-5">
                        <div>
                            <label for="user name" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Nombre</label>
                            <input placeholder="Arthur Melo" type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        </div>
    
                        <div class="mt-4">
                            <label for="email" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Teammate email</label>
                            <input placeholder="arthurmelo@example.app" type="email" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                        </div>
                        
                        <div class="mt-4">
                            <h1 class="text-xs font-medium text-gray-400 uppercase">Permissions</h1>
    
                            <div class="mt-4 space-y-5">
                                <div class="flex items-center space-x-3 cursor-pointer" x-data="{ show: true }" @click="show =!show">
                                    <div class="relative w-10 h-5 transition duration-200 ease-linear rounded-full"
                                        :class="[show ? 'bg-indigo-500' : 'bg-gray-300']">
                                        <label for="show"
                                            @click="show =!show"
                                            class="absolute left-0 w-5 h-5 mb-2 transition duration-100 ease-linear transform bg-white border-2 rounded-full cursor-pointer"
                                            :class="[show ? 'translate-x-full border-indigo-500' : 'translate-x-0 border-gray-300']"></label>
                                        <input type="checkbox" name="show" class="hidden w-full h-full rounded-full appearance-none active:outline-none focus:outline-none"/>
                                    </div>
    
                                    <p class="text-gray-500">Can make task</p>
                                </div>
    
                                <div class="flex items-center space-x-3 cursor-pointer" x-data="{ show: false }" @click="show =!show">
                                    <div class="relative w-10 h-5 transition duration-200 ease-linear rounded-full"
                                        :class="[show ? 'bg-indigo-500' : 'bg-gray-300']">
                                        <label for="show"
                                            @click="show =!show"
                                            class="absolute left-0 w-5 h-5 mb-2 transition duration-100 ease-linear transform bg-white border-2 rounded-full cursor-pointer"
                                            :class="[show ? 'translate-x-full border-indigo-500' : 'translate-x-0 border-gray-300']"></label>
                                        <input type="checkbox" name="show" class="hidden w-full h-full rounded-full appearance-none active:outline-none focus:outline-none"/>
                                    </div>
    
                                    <p class="text-gray-500">Can delete task</p>
                                </div>
    
                                <div class="flex items-center space-x-3 cursor-pointer" x-data="{ show: true }" @click="show =!show">
                                    <div class="relative w-10 h-5 transition duration-200 ease-linear rounded-full"
                                        :class="[show ? 'bg-indigo-500' : 'bg-gray-300']">
                                        <label for="show"
                                            @click="show =!show"
                                            class="absolute left-0 w-5 h-5 mb-2 transition duration-100 ease-linear transform bg-white border-2 rounded-full cursor-pointer"
                                            :class="[show ? 'translate-x-full border-indigo-500' : 'translate-x-0 border-gray-300']"></label>
                                        <input type="checkbox" name="show" class="hidden w-full h-full rounded-full appearance-none active:outline-none focus:outline-none"/>
                                    </div>
    
                                    <p class="text-gray-500">Can edit task</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex justify-end mt-6">
                            <button type="button" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                Invite Member
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>