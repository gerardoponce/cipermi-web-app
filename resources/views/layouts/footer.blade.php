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
        <section class="flex justify-center sm:justify-end mx-6 md:mx-28 py-4">
            <section class="flex flex-row divide-x divide-white-1 my-auto">
            @foreach ($opciones as $opcion)
            <a href="{{ route($opcion[1]) }}">
                <h2 class="block-inline px-1 text-xs sm:text-base md:text-2xl font-bold sm:font-normal">
                    {{ $opcion[0] }}
                </h2>
            </a>
            @endforeach
            </section>
            <h2 class="block-inline ml-4 px-1 text-2xl md:text-4xl">Cipermi</h2>
        </section>
        
        <section class="mx-auto mx-6 md:mx-28 flex justify-between mt-6 mb-4 text-center"> 
        @foreach ($ubicaciones as $ubicacion)
        <article class="mx-auto m-2 px-4 sm:0 py-1">
            <h3 class="text-sm md:text-xl font-semibold">{{ $ubicacion[0] }}:</h3>
            <p class="text-xs md:text-base">{{ $ubicacion[1] }}</p>
            <p class="text-xs md:text-base">
                {{ $ubicacion[2] }}<br/>
                {{ $ubicacion[3] }}
            </p>
        </article>
        @endforeach
        </section>
        <section class="border-t-2 border-l-white-1 mx-6 md:mx-28 mt-4 flex justify-between items-end pt-6">
            <section class="pt-4 pb-1 sm:pb-2 pr-2">
                <h3 class="text-sm md:text-xl font-semibold">Atención</h3>
                <p class="text-xs md:text-base">
                    Lun. a Vie. de 8:00 am a 5:30 pm<br/>
                    Sab. de 8:00 am a 1:00 pm
                </p>
            </section>

            <section class="pt-4 pb-1 sm:pb-2 pl-2 flex flex-row">
                <a href="{{ route('contactanos') }}">
                    <div class="h-8 w-8 md:h-12 md:w-12 mx-2 flex items-center justify-center">
                        <?xml version="1.0" ?>
                        <svg height="100" viewBox="0 0 100 100" width="100" xmlns="http://www.w3.org/2000/svg">
                            <path d="M50 0c-27.614 0-50 22.386-50 50s22.386 50 50 50 50-22.387 50-50-22.386-50-50-50z" fill="#324D5B"/>
                            <path d="M19 82.998v-56l-18.812 18.813c-.115 1.382-.188 2.776-.188 4.189 0 12.649 4.707 24.192 12.452 32.999h6.548z" fill="#2B424D"/>
                            <path d="M89 81.272v-24.272l-39.025-19-38.975 19v24.272c9.164 11.415 23.224 18.728 39 18.728 15.775 0 29.836-7.313 39-18.728z" fill="#DA9C44"/>
                            <path d="M19 27h63c1.104 0 2 .895 2 2v46c0 1.104-.896 2-2 2h-63c-1.104 0-2-.896-2-2v-46c0-1.105.896-2 2-2z" fill="#F3F3F3"/>
                            <path d="M38 32h7l4-5h-7l-4 5zm30-5l-4 5h7l4-5h-7zm-51 2v3h3l4-5h-5c-1.104 0-2 .895-2 2z" fill="#26A6D1"/>
                            <path d="M51 32h7l4-5h-7l-4 5zm-26 0h7l4-5h-7l-4 5zm57-5h-1l-4 5h7v-3c0-1.105-.896-2-2-2z" fill="#E2574C"/>
                            <path d="M73.5 47h-17c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5h17c.828 0 1.5-.671 1.5-1.5s-.672-1.5-1.5-1.5zm-3 6h-14c-.828 0-1.5.672-1.5 1.499 0 .829.672 1.501 1.5 1.501h14c.828 0 1.5-.672 1.5-1.501 0-.827-.672-1.499-1.5-1.499zm-31.483-4.04l.682 3.585-5.699-8.546-8 12c0 1.105 5.148 2 11.5 2s11.5-.895 11.5-2l-7-10-2.983 2.961zm.983-4.961c1.104 0 2-.896 2-2s-.896-2-2-2-2 .896-2 2 .896 2 2 2zm16.5.001h17c.828 0 1.5-.671 1.5-1.5s-.672-1.5-1.5-1.5h-17c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5z" fill="#DFE1E2"/>
                            <path d="M89 81.272v-24.272l-39.025 18.999-38.975-18.999v24.272c9.164 11.415 23.224 18.728 39 18.728 15.775 0 29.836-7.313 39-18.728z" fill="#F4B459"/>
                            <path d="M89 57l-68.409 33.427c8.25 6.012 18.403 9.569 29.392 9.573h.034c15.769-.006 29.823-7.318 38.983-18.728v-24.272z" fill="#F6C37A"/>
                        </svg>
                    </div>
                </a>
                <a href="https://api.whatsapp.com/send?phone=51990500014&text=Hola que tal?, tengo una consulta">
                    <div class="h-8 w-8 md:h-12 md:w-12 mx-2 flex items-center justify-center">
                        <?xml version="1.0" ?>
                        <svg id="Layer_1" style="enable-background:new 0 0 1000 1000;" version="1.1" viewBox="0 0 1000 1000" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <style type="text/css">
                                .st0{fill:#25D366;}
                                .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;}
                            </style>
                            <g>
                                <path class="st0" d="M500,1000L500,1000C223.9,1000,0,776.1,0,500v0C0,223.9,223.9,0,500,0h0c276.1,0,500,223.9,500,500v0   C1000,776.1,776.1,1000,500,1000z"/>
                                <g>
                                    <g id="WA_Logo">
                                        <g>
                                            <path class="st1" d="M733.9,267.2c-62-62.1-144.6-96.3-232.5-96.4c-181.1,0-328.6,147.4-328.6,328.6      c0,57.9,15.1,114.5,43.9,164.3L170.1,834l174.2-45.7c48,26.2,102,40,157,40h0.1c0,0,0,0,0,0c181.1,0,328.5-147.4,328.6-328.6      C830.1,411.9,796,329.3,733.9,267.2z M501.5,772.8h-0.1c-49,0-97.1-13.2-139-38.1l-10-5.9L249,755.9l27.6-100.8l-6.5-10.3      c-27.3-43.5-41.8-93.7-41.8-145.4c0.1-150.6,122.6-273.1,273.3-273.1c73,0,141.5,28.5,193.1,80.1c51.6,51.6,80,120.3,79.9,193.2      C774.6,650.3,652,772.8,501.5,772.8z M651.3,568.2c-8.2-4.1-48.6-24-56.1-26.7c-7.5-2.7-13-4.1-18.5,4.1      c-5.5,8.2-21.2,26.7-26,32.2c-4.8,5.5-9.6,6.2-17.8,2.1c-8.2-4.1-34.7-12.8-66-40.8c-24.4-21.8-40.9-48.7-45.7-56.9      c-4.8-8.2-0.5-12.7,3.6-16.8c3.7-3.7,8.2-9.6,12.3-14.4c4.1-4.8,5.5-8.2,8.2-13.7c2.7-5.5,1.4-10.3-0.7-14.4      c-2.1-4.1-18.5-44.5-25.3-61c-6.7-16-13.4-13.8-18.5-14.1c-4.8-0.2-10.3-0.3-15.7-0.3c-5.5,0-14.4,2.1-21.9,10.3      c-7.5,8.2-28.7,28.1-28.7,68.5c0,40.4,29.4,79.5,33.5,84.9c4.1,5.5,57.9,88.4,140.3,124c19.6,8.5,34.9,13.5,46.8,17.3      c19.7,6.3,37.6,5.4,51.7,3.3c15.8-2.4,48.6-19.9,55.4-39c6.8-19.2,6.8-35.6,4.8-39C665,574.4,659.5,572.4,651.3,568.2z"/>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </a>
                <a href="https://www.facebook.com/cipermisac.tableros.5">
                    <div class="h-8 w-8 md:h-12 md:w-12 mx-2 flex items-center justify-center">
                            <?xml version="1.0" ?>
                            <!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'>
                            <svg height="100%" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" viewBox="0 0 512 512" width="100%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g>
                                    <path d="M512,256c0,-141.385 -114.615,-256 -256,-256c-141.385,0 -256,114.615 -256,256c0,127.777 93.616,233.685 216,252.89l0,-178.89l-65,0l0,-74l65,0l0,-56.4c0,-64.16 38.219,-99.6 96.695,-99.6c28.009,0 57.305,5 57.305,5l0,63l-32.281,0c-31.801,0 -41.719,19.733 -41.719,39.978l0,48.022l71,0l-11.35,74l-59.65,0l0,178.89c122.385,-19.205 216,-125.113 216,-252.89Z" style="fill:#1877f2;fill-rule:nonzero;"/>
                                    <path d="M355.65,330l11.35,-74l-71,0l0,-48.022c0,-20.245 9.917,-39.978 41.719,-39.978l32.281,0l0,-63c0,0 -29.297,-5 -57.305,-5c-58.476,0 -96.695,35.44 -96.695,99.6l0,56.4l-65,0l0,74l65,0l0,178.89c13.033,2.045 26.392,3.11 40,3.11c13.608,0 26.966,-1.065 40,-3.11l0,-178.89l59.65,0Z" style="fill:#fff;fill-rule:nonzero;"/>
                                </g>
                            </svg>
                    </div>
                </a>

            </section>
        </section>
    </section>
    <section class="text-center text-xs md:text-base py-1 bg-l-blue-5">
        Todos los derechos reservados © 2021 Cipermi S.A.C
    </section>
</footer>