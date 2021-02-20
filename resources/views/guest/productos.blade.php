<x-guest-layout>
@include('layouts.navigation')

<main class="bg-white-1 text-center px-2 py-6 md:px-6 lg:px-16">
    <h2 class="text-2xl md:text-4xl my-4">Productos</h2>
    <section class="flex flex-wrap justify-center">
    @foreach ($productos as $producto)
        <article class="m-4 bg-white-1 rounded-md h-min w-screen md:w-72 lg:w-96 shadow-xl">
            <img class="rounded-t-md" src="{{ $producto->imagen_portada }}" alt="{{ $producto->alt_imagen_portada }}">
            <h3 class="font-bold my-1">{{ $producto->nombre }}</h3>
            <p class="text-xs md:text-sm my-1 pt-1 pb-2 px-2 text-justify">{{ $producto->descripcion }}</p>
        </article>
    @endforeach
    </section>


</main>

@include('layouts.footer')
</x-guest-layout>