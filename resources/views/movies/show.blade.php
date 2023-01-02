<x-app-layout>
    <div class="overflow-hidden shadow-sm ">
        <section class="grid grid-cols-1">
            <img class="object-cover object-top h-96 w-full" src="https://images.alphacoders.com/121/1214989.jpg" alt="">
        </section>
        <div class="container mx-auto">
            <section class="flex gap-x-5 mb-10">
                <article>
                    <img class="md:-mt-20 w-0 sm:w-0 md:w-0 lg:w-96 xl:w-96  border border-pink-200 rounded-3xl"src="https://image.tmdb.org/t/p/w154/6yoghtyTpznpBik8EngEmJskVUO.jpg"
                        alt="">
                </article>
                <article class="pt-5 text-white">
                    <h1 class="text-5xl capitalize">{{ $movie->name }}<span class="text-xl text-gray-500">
                            (2019)</span></h1>
                    {{-- premiere, genre  --}}
                    <span class="flex gap-x-2 mt-2 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-5 h-5 fill-teal-200">
                            <path
                                d="M16.364 3.636a.75.75 0 00-1.06 1.06 7.5 7.5 0 010 10.607.75.75 0 001.06 1.061 9 9 0 000-12.728zM4.697 4.697a.75.75 0 00-1.061-1.06 9 9 0 000 12.727.75.75 0 101.06-1.06 7.5 7.5 0 010-10.607z" />
                            <path
                                d="M12.475 6.465a.75.75 0 011.06 0 5 5 0 010 7.07.75.75 0 11-1.06-1.06 3.5 3.5 0 000-4.95.75.75 0 010-1.06zM7.525 6.465a.75.75 0 010 1.06 3.5 3.5 0 000 4.95.75.75 0 01-1.06 1.06 5 5 0 010-7.07.75.75 0 011.06 0zM11 10a1 1 0 11-2 0 1 1 0 012 0z" />
                        </svg>
                        <span class="text-teal-200 tracking-widest">Dic/3/1999 (US)</span>
                        •
                        <a href="#"
                            class="text-pink-200 hover:text-gray-400 hover:border-b hover:border-pink-600">Crimen</a>
                        <a href="#"
                            class="text-pink-200 hover:text-gray-400 hover:border-b hover:border-pink-600">Suspense</a>
                    </span>
                    {{-- Lista de favoritos, like, score --}}
                    <section class="flex items-center gap-x-5">
                        <div
                            class="bg-gradient-to-r from-indigo-900 via-gray-900 to-indigo-900 rounded-full p-3 flex items-center gap-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>
                            <span class="text-sm ">8.888/10</span>
                        </div>
                        <div
                            class="bg-gradient-to-r from-purple-900 via-pink-900 to-black hover:from-pink-900 hover:via-purple-900 hover:to-black rounded-full p-3 flex gap-x-2">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                            </a>
                            7
                        </div>
                        <div
                            class="bg-gradient-to-r from-purple-900 via-black to-pink-900 hover:from-pink-900 hover:via-purple-900 hover:to-black rounded-full p-3">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                </svg>
                            </a>
                        </div>
                    </section>
                    <div class="mt-3">
                        <h3>Sinapsis</h3>
                        <section class="h-20 overflow-auto">
                            <p class="text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi omnis
                                aliquam vitae
                                itaque doloribus fuga quos velit ipsum ducimus consectetur quibusdam blanditiis
                                perferendis officia, asperiores, deleniti recusandae sint reprehenderit sunt.
                            </p>
                        </section>
                    </div>
                </article>
            </section>
            <section class="mb-20 grid grid-cols-3 border border-indigo-200">
                <article class="overflow-x-auto col-span-3 md:col-span-2 border border-red-900">
                    {{-- actores --}}
                    <div class="grid grid-cols-3 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 md:gap-x-2">
                        <div class="w-40 bg-white shadow border border-pink-200 mb-3">
                            {{-- image of profile of actor --}}
                            <div class="h-48 w-full bg-gray-200 flex flex-col justify-between p-4 bg-cover bg-center"
                                style="background-image: url('https://www.infobae.com/new-resizer/8pQCp7Pgi7imBtNq95PrYgFa1U4=/1200x900/filters:format(webp):quality(85)//s3.amazonaws.com/arc-wordpress-client-uploads/infobae-wp/wp-content/uploads/2016/07/28235953/morgan-freeman.jpg')">
                            </div>
                            {{-- data of actor --}}
                            <div class="p-4 bg-black">
                                <p class="text-white  text-center text-sm my-1 truncate">
                                    morgan freeman
                                </p>
                            </div>
                        </div>
                        <div class="w-40 bg-white shadow border border-white mb-3">
                            {{-- image of profile of actor --}}
                            <div class="h-48 w-full bg-gray-200 flex flex-col justify-between p-4 bg-cover bg-center"
                                style="background-image: url('https://www.themoviedb.org/t/p/w138_and_h175_face/oTB9vGIBacH5aQNS0pUM74QSWuf.jpg')">
                            </div>
                            {{-- data of actor --}}
                            <div class="p-4 bg-black">
                                <p class="text-white  text-center text-sm my-1">
                                    Brad Pitt
                                </p>
                            </div>
                        </div>
                        <div class="w-40 bg-white shadow border border-white mb-3">
                            {{-- image of profile of actor --}}
                            <div class="h-48 w-full bg-gray-200 flex flex-col justify-between p-4 bg-cover bg-center"
                                style="background-image: url('https://www.themoviedb.org/t/p/w138_and_h175_face/slPWN0VvYJtNOEuxlFSsXSNQMaF.jpg')">
                            </div>
                            {{-- data of actor --}}
                            <div class="p-4 bg-black">
                                <p class="text-white  text-center text-sm my-1">
                                    Gwyneth Paltrow
                                </p>
                            </div>
                        </div>
                        <div class="w-40 bg-white shadow border border-white mb-3">
                            {{-- image of profile of actor --}}
                            <div class="h-48 w-full bg-gray-200 flex flex-col justify-between p-4 bg-cover bg-center"
                                style="background-image: url('https://www.themoviedb.org/t/p/w138_and_h175_face/dlVRkUYKyZdJ39AN55cY1LoyXAP.jpg')">
                            </div>
                            {{-- data of actor --}}
                            <div class="p-4 bg-black">
                                <p class="text-white  text-center text-sm my-1 truncate">
                                    Kevin Spacey
                                </p>
                            </div>
                            
                        </div>
                        <div class="w-40 bg-white shadow border border-white mb-3">
                            {{-- image of profile of actor --}}
                            <div class="h-48 w-full bg-gray-200 flex flex-col justify-between p-4 bg-cover bg-center"
                                style="background-image: url('https://www.themoviedb.org/t/p/w138_and_h175_face/dlVRkUYKyZdJ39AN55cY1LoyXAP.jpg')">
                            </div>
                            {{-- data of actor --}}
                            <div class="p-4 bg-black">
                                <p class="text-white  text-center text-sm my-1 truncate">
                                    Kevin Spacey
                                </p>
                            </div>
                        </div>
                        <div class="w-40 bg-white shadow border border-white mb-3">
                            {{-- image of profile of actor --}}
                            <div class="h-48 w-full bg-gray-200 flex flex-col justify-between p-4 bg-cover bg-center"
                                style="background-image: url('https://www.themoviedb.org/t/p/w138_and_h175_face/dlVRkUYKyZdJ39AN55cY1LoyXAP.jpg')">
                            </div>
                            {{-- data of actor --}}
                            <div class="p-4 bg-black">
                                <p class="text-white  text-center text-sm my-1 truncate">
                                    Kevin Spacey
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </article>
                <article class="col-span-3 md:col-span-1">
                    <div class="p-4">
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"/>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            <x-primary-button class="w-full bg-purple-900 mt-2">
                                <span class="text-center">
                                    {{ __('Comment') }}
                                </span>
                            </x-primary-button>
                        </div>
                </article>
            </section>
        </div>
    </div>
</x-app-layout>
