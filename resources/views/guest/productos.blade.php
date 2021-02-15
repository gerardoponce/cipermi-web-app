<x-guest-layout>
@include('layouts.navigation')

<main class="bg-white-1 text-center px-2 py-6 md:px-6 lg:px-16">
    <h2 class="text-2xl md:text-4xl">Productos</h2>
    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
    @foreach ($productos as $producto)
        <article class="mx-auto m-2 bg-white-1 rounded-md h-80 w-80 md:h-72 md:w-72 lg:h-96 lg:w-96 shadow-xl">
            <img class="rounded-t-md" src="{{ $producto->imagen_portada }}" alt="{{ $producto->alt_imagen_portada }}">
            <h3 class="font-bold">{{ $producto->nombre }}</h3>
            <p class="text-xs md:text-sm p-1">{{ $producto->descripcion }}</p>
        </article>
    @endforeach
    </section>


</main>

@include('layouts.footer')
</x-guest-layout>