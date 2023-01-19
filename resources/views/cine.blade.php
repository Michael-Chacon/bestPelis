<x-app-layout>
    <section class="bg-gradient-to-r from-red-900 via-black to-black border-t border-gray-500">
        <article class="grid grid-cols-2 md:justify-center md:items-start py-10 px-5">
            <section class="col-span-1 text-center">
                <h2 class="text-6xl text-gray-200 font-thin">
                    ¿No sabes que ver?
                </h2>
                <p class="mt-5 px-5 text-xl text-gray-300">
                     Acá podrás encontrar una selecta lista de películas, series, anime que te recomendamos y si no quieres ver nada, pues puedes echarle un vistazo al listado de pódcast 
                </p>
            </section>
            <section class="col-span-1 flex justify-center">
                <img class="h-52" src="{{ asset('storage/ilustraciones/portada.svg') }}" alt="Imagen de portada">
            </section>
        </article>

        <div style="height: 100px; overflow: hidden;" >
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C385.15,163.33 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #FCFCFB;">
                </path>
            </svg>
        </div>

        <article class="grid grid-cols-2 bg-white px-5 pb-10 items-center">
            <section class="col-span-1">
                <img class="h-52" src="{{ asset('storage/ilustraciones/movies.svg') }}" alt="">
            </section>
            <section class="col-span-1 text-center">
                <h2 class="text-4xl">
                    Movies
                </h2>
                <p class="text-xl px-5 mt-5">
                    Échale un vistazo a nuestra biblioteca de sugerencias de películas, a ver ya las viste todas :v.
                </p>
            </section>
        </article>

    </section>
</x-app-layout>
