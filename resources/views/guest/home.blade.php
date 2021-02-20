<x-guest-layout>
@include('layouts.navigation')
<main class="divide-y-2 divide-white-1">
    
    <section class="bg-l-blue-2 text-center px-0 py-6 sm:px-10 md:px-12 lg:px-20 xl:px-72">
        <div class="flex flex-wrap justify-center">
        @foreach ($servicios as $servicio)
            <x-icono-servicio nombre="{{ $servicio->nombre }}" icono="{{ $servicio->icono_portada }}" textAltIcono="{{ $servicio->alt_icono_portada }}" />
        @endforeach
        </div>
        <a href="{{ route('servicios') }}">
            <button type="button" class="border border-orange-1 bg-orange-1 text-white-1 rounded-md px-4 py-2 my-4 transition duration-500 ease select-none hover:bg-orange-2 focus:outline-none focus:shadow-outline">
                Más información
            </button>
        </a>
    </section>

    <section class="bg-black-1 text-white-1 text-center py-6">
        <p class="text-2xl md:text-4xl pt-6 pb-2">¡Trabajar con nosotros es muy sencillo!</p>
        <p class="text-xl md:text-xl py-2">El servicio adecuado con el precio justo</p>
        <a href="{{ route('contactanos') }}">
            <button type="button" class="border border-orange-1 bg-orange-1 text-white-1 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-orange-2 focus:outline-none focus:shadow-outline">
                Contáctanos
            </button>
        </a>
    </section>

    <section class="bg-white-1 text-center px-0 py-6 md:px-6 lg:px-28">
        <h2 class="block text-lg md:text-2xl m-4">Nuestros productos</h2>
        <div class="bg-white-1 flex flex-wrap justify-center">
        @foreach ($productos as $producto)
            <x-card-producto nombre="{{ $producto->nombre }}" imagen="{{ $producto->imagen_portada }}" textAltImagen="{{ $producto->alt_imagen_portada }}" />
        @endforeach
        </div>
        <a href="{{ route('productos') }}">
            <button class="inline-block border border-orange-1 bg-orange-1 text-white-1 rounded-md px-4 py-2 my-4 transition duration-500 ease select-none hover:bg-orange-2 focus:outline-none focus:shadow-outline">
                Ver más
            </button>
        </a>

    </section>
    
</main>
@include('layouts.footer')
</x-guest-layout>