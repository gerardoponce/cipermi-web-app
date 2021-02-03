<x-guest-layout>
@include('layouts.navigation')
<main class="divide-y-2 divide-fuchsia-300">
    
    <section class="bg-l-blue-2">
        <section class="grid lg:grid-cols-4">
        @foreach ($servicios as $servicio)
            <x-icono-servicio nombre="{{ $servicio->nombre }}" icono="{{ $servicio->icono_portada }}" textAltIcono="{{ $servicio->alt_icono_portada }}" />
        @endforeach
        </section>
    </section>
    <section class="bg-black-300 h-48">

    </section>
    <section class="bg-white-1 grid lg:grid-cols-5">
    @foreach ($productos as $producto)
            <x-card-producto />
        @endforeach
    </section>
    <section></section>
    
</main>
@include('layouts.footer')
</x-guest-layout>