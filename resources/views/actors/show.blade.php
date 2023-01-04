<x-app-layout>
   <main class="container mx-auto mt-5">
        <article class="grid md:grid-cols-4 md:gap-x-4">
            <section class="md:col-span-1 mb-3">
                <img class="border border-gray-500 w-80 rounded-lg" src="{{ asset('storage/actors/' . $actor->fotoActor) }}" alt="">
                <section class="flex justify-center items-center gap-x-5 mt-5 text-white border border-gray-500 p-5">
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
                </section>
            </section>
            <section class="md:col-span-3 px-5">
                <h1 class="text-gray-300 text-5xl capitalize tracking-widest text-center md:text-left">
                    {{ $actor->name }}
                </h1>
                <p class="text-sm text-gray-400 text-justify pt-3 tracking-wide">
                    {{ $actor->biografia }}
                </p>
                <article class="mt-8">
                    <h3 class="text-gray-400 tracking-widest text-2xl mb-5 text-center md:text-left">Peliculas donde actua</h3>
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
            </section>
        </article>
   </main>
</x-app-layout>