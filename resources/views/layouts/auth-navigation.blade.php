@php
$opciones = [
    ['Inicio', 'inicio'], 
    ['Servicios', 'servicios'],
    ['Productos', 'productos'],
    ['Locales', 'locales'],
    ['Nosotros', 'nosotros']
];

@endphp
<header class="">

    <nav x-data="{ open: false }" class="bg-white-1 lg:px-6">
        <!-- Primary Navigation Menu -->
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 sm:h-24">

                    <!-- Logo -->
                    <section class="flex-shrink-0 flex justify-start sm:justify-center md:justify-start items-center font-bold">
                        <a href="{{ route('inicio') }}">
                            <h2 class="block-inline ml-4 px-1 text-2xl md:text-4xl">Cipermi</h2>
                        </a>
                    </section>

                    <!-- Navigation Links -->
                    <section class="flex justify-between sm:space-x-2 sm:justify-center md:space-x-4 md:justify-around lg:space-x-6 items-center">
                        @foreach ($opciones as $opcion)
                            <div class="hidden sm:flex">
                                <x-nav-link :href="route($opcion[1])" :active="request()->routeIs($opcion[1])">
                                    {{ $opcion[0] }}
                                </x-nav-link>
                            </div>
                        @endforeach

                        <a href="{{ route('login') }}" class="hidden sm:flex text-xs md:text-sm lg:text-base">
                            <button class="bg-orange-2 border-2 border-orange-2 text-white rounded-md px-4 py-2 my-4 transition duration-500 ease select-none hover:bg-white-1 hover:text-l-blue-3 hover:border-l-blue-3 focus:outline-none focus:shadow-outline">
                                Iniciar sesión
                            </button>
                        </a>
                    </section>

                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">

            @foreach ($opciones as $opcion)
                <div class="pt-2 pb-3 space-y-1">
                    <x-responsive-nav-link :href="route($opcion[1])" :active="request()->routeIs($opcion[1])">
                        {{ $opcion[0] }}
                    </x-responsive-nav-link>
                </div>
            @endforeach

            <div class="flex justify-center space-x-1.5 sm:hidden">
                <a href="{{ route('login') }}" class="sm:hidden text-xs md:text-sm lg:text-base">
                    <button class="bg-white-1 border-2 border-l-blue-3 text-l-blue-3 rounded-md w-40 py-2 my-4 flex-grow transition duration-500 ease select-none focus:bg-orange-2 focus:text-white-1 focus:border-orange-2 focus:outline-none focus:shadow-outline">
                        Iniciar sesión
                    </button>
                </a>

                <a href="{{ route('login') }}" class="sm:hidden text-xs md:text-sm lg:text-base">
                    <button class="bg-white-1 border-2 border-l-blue-3 text-l-blue-3 rounded-md w-40 py-2 my-4 flex-grow transition duration-500 ease select-none focus:bg-orange-2 focus:text-white-1 focus:border-orange-2 focus:outline-none focus:shadow-outline">
                        Buscar
                    </button>
                </a>
            </div>

        </div>
    </nav>

</header>
