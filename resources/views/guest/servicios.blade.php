<x-guest-layout>
@include('layouts.navigation')

<section class="grid grid-cols-4 px-6 md:px-28 py-4 bg-l-blue-2">
    <section class="inline-block text-white-1 col-span-2 py-4 px-4">
        <h2 class="text-2xl md:text-4xl">Servicios</h2>
        <p class="text-sm md:text-xl md:text-justify">Cipermi brinda servicios a clientes comerciales. Para nosotros, todos los trabajos son importates; sean grandes o pequeños. Por eso, nos esforzamos en brindarles el mejor servicio</p>
    </section>
    <a href="{{ route('contactanos') }}" class="inline-block my-auto mx-auto md:mx-auto col-span-2 col-start-3 my-2 mx-12">
        <button type="button" class="border border-orange-1 bg-orange-1 text-white-1 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-orange-2 focus:outline-none focus:shadow-outline text-xl md:text-2xl">
            Contáctanos
        </button>
    </a>
</section>

<main>
    <section class="bg-white-1">
        @foreach ($servicios as $servicio)
        <article class="grid grid-cols-2 ">
            <div class="px-4 md:px-16 mlg:px-20 py-2 xl:px-48">
                <h3 class="">{{ $servicio->nombre }}</h3>
                <p>{{ $servicio->descripcion }}</p>
            </div>
            <img class="m-auto p-auto object-cover h-60 sm:h-64 md:h-80 lg:h-96 w-full" src="{{ $servicio->video_demostracion }}" alt="{{ $servicio->video_descripcion }}">
        </article>
        @endforeach
    </section>

</main>

@include('layouts.footer')
</x-guest-layout>