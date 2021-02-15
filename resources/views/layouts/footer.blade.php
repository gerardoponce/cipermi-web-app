@php
$opciones = [
    ['Servicios', 'servicios'],
    ['Productos', 'productos'],
    ['Nosotros', 'nosotros']
    ];

$ubicaciones = [
    ['Oficina Principal', 'Jr. Platinos Nº 656 La Huayrona - SJL, Lima', "(01) 387 - 0645 / 990 500 014", "ventas@cipermi.com"],
    ['Planta', 'Mz H12 Lote 01, Anexo 22 Jicamarca, Av. Santa Rosa', "", ""]
];


@endphp

<footer class="text-white-1">
    <section class="bg-l-blue-4 pb-4">
        <section class="flex justify-end mx-6 md:mx-28 py-4">
            <section class="flex flex-row divide-x divide-white-1 my-auto">
            @foreach ($opciones as $opcion)
            <a href="{{ route($opcion[1]) }}">
                <h2 class="block-inline px-1 text-sm md:text-2xl">
                    {{ $opcion[0] }}
                </h2>
            </a>
            @endforeach
            </section>
            <h2 class="block-inline ml-4 px-1 text-2xl md:text-4xl">Cipermi</h2>
        </section>
        
        <section class="mx-auto grid grid-cols-2 m-4 mt-6 text-center w-auto md:w-9/12"> 
        @foreach ($ubicaciones as $ubicacion)
        <article class="mx-auto m-2 p-1">
            <h3 class="text-sm md:text-xl font-semibold">{{ $ubicacion[0] }}:</h3>
            <p class="text-xs md:text-base">{{ $ubicacion[1] }}</p>
            <p class="text-xs md:text-base">
                {{ $ubicacion[2] }}<br/>
                {{ $ubicacion[3] }}
            </p>
        </article>
        @endforeach
        </section>
        <section  class="border-t-2 border-l-white-1 mx-6 md:mx-28 mt-4 flex justify-between pt-6">
            <section class="py-4 px-4 ">
                <h3 class="text-sm md:text-xl font-semibold">Atención</h3>
                <p class="text-xs md:text-base">
                    Lun. a Vie. de 8:00 am a 5:30 pm<br/>
                    Sab. de 8:00 am a 1:00 pm
                </p>
            </section>

            <section class="py-4 px-4 flex flex-row my-auto">
                <a href="{{ route('contactanos') }}">
                    <div class="rounded-full h-8 w-8 md:h-12 md:w-12 bg-white-1 text-l-blue-4 mx-2 flex items-center justify-center"><i class="far fa-envelope fa-lg"></i></div>
                </a>
                <a href="">
                    <div class="rounded-full h-8 w-8 md:h-12 md:w-12 bg-white-1 text-l-blue-4 mx-2 flex items-center justify-center"><i class="fab fa-whatsapp fa-lg"></i></div>
                </a>
                <a href="">
                    <div class="rounded-full h-8 w-8 md:h-12 md:w-12 bg-white-1 text-l-blue-4 mx-2 flex items-center justify-center"><i class="fab fa-facebook-f fa-lg"></i></i></div>
                </a>
            
            </section>
        </section>
    </section>
    <section class="text-center text-xs md:text-base py-1 bg-l-blue-5">
        Todos los derechos reservados © 2021 Cipermi S.A.C
    </section>
</footer>