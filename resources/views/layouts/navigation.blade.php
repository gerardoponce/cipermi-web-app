@php
$opciones = [
    ['Inicio', 'inicio'], 
    ['Servicios', 'servicios'],
    ['Productos', 'productos'],
    ['Locales', 'locales'],
    ['Nosotros', 'nosotros']
    ];

@endphp
<header class="lg:relative">

    <div class="hidden lg:block" x-data="{items: ['Slide 1','Slide 2','Slide 3','Slide 4'], active: 0}">
        <div class="snap overflow-auto relative flex-no-wrap flex transition-all" x-ref="slider"
            x-on:scroll.debounce="active = Math.round($event.target.scrollLeft / ($event.target.scrollWidth / items.length))">
            <template x-for="(item,index) in items" :key="index">
                <div class="w-full flex-shrink-0 h-96 bg-black text-white flex items-center justify-center">
                    <span x-text="item"></span>
                </div>
            </template>
        </div>
        <div class="p-4 flex items-center justify-center flex-1 bg-l-blue-2">
            <button
                class="outline-none focus:outline-none rounded-full mx-4 text-white-1"
                x-on:click=" $refs.slider.scrollLeft = $refs.slider.scrollLeft - ($refs.slider.scrollWidth / items.length)">
                <
            </button>
            <template x-for="(item,index) in items" :key="index">
                <span class="bg-white-1 w-5 h-2 block mx-1 bg-opacity-25 shadow"
                x-bind:class="{'bg-opacity-100': active === index }"></span>
            </template>
            <button
                class="outline-none focus:outline-none rounded-full mx-4 text-white-1"
                x-on:click="$refs.slider.scrollLeft = $refs.slider.scrollLeft + ($refs.slider.scrollWidth / items.length)">
                >
            </button>
        </div>
    </div>

    <nav x-data="{ open: false }" class="bg-white-1 sm:mx-auto md:rounded-none lg:rounded-lg lg:max-w-4xl xl:max-w-6xl lg:mt-20 lg:absolute lg:left-0 lg:top-0 lg:right-0">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between sm:justify-center h-16 sm:h-24">
                <div class="flex justify-between">
                    <!-- Logo -->
                    <div class="flex-shrink-0 flex items-center font-bold">
                        @auth
                        <a href="{{ route('admin') }}">
                            <h2 class="block-inline ml-4 px-1 text-2xl md:text-4xl">Cipermi Admin</h2>
                        </a>
                        @else
                        <a href="{{ route('inicio') }}">
                            <h2 class="block-inline ml-4 px-1 text-2xl md:text-4xl">Cipermi</h2>
                        </a>
                        @endauth
                    </div>

                    <!-- Navigation Links -->
                    @foreach ($opciones as $opcion)
                        <div class="hidden space-x-8 sm:ml-5 md:ml-10 sm:flex">
                            <x-nav-link :href="route($opcion[1])" :active="request()->routeIs($opcion[1])">
                                {{ $opcion[0] }}
                            </x-nav-link>
                        </div>
                    @endforeach
                    
                </div>

                @auth
                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                
                                <div>{{ Auth::user()->name }}</div>
                                
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Logout') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
                @endauth

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


            <!-- Responsive Settings Options -->
            @auth
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="flex items-center px-4">
                    <div class="flex-shrink-0">
                        <svg class="h-10 w-10 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    
                    <div class="ml-3">
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                </div>

                <div class="mt-3 space-y-1">
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Logout') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
            @endauth
        </div>
    </nav>

    <div class="lg:hidden lg:block" x-data="{items: ['Slide 1','Slide 2','Slide 3','Slide 4'], active: 0}">
        <div class="snap overflow-auto relative flex-no-wrap flex transition-all" x-ref="slider"
            x-on:scroll.debounce="active = Math.round($event.target.scrollLeft / ($event.target.scrollWidth / items.length))">
            <template x-for="(item,index) in items" :key="index">
                <div class="w-full flex-shrink-0 h-96 bg-black text-white flex items-center justify-center">
                    <span x-text="item"></span>
                </div>
            </template>
        </div>
        <div class="p-4 flex items-center justify-center flex-1 bg-l-blue-2">
            <button
                class="outline-none focus:outline-none rounded-full mx-4 text-white"
                x-on:click=" $refs.slider.scrollLeft = $refs.slider.scrollLeft - ($refs.slider.scrollWidth / items.length)">
                <
            </button>
            <template x-for="(item,index) in items" :key="index">
                <span class="bg-white-1 w-5 h-2 block mx-1 bg-opacity-25 shadow"
                x-bind:class="{'bg-opacity-100': active === index }"></span>
            </template>
            <button
                class="outline-none focus:outline-none rounded-full mx-4 text-white"
                x-on:click="$refs.slider.scrollLeft = $refs.slider.scrollLeft + ($refs.slider.scrollWidth / items.length)">
                >
            </button>
        </div>
    </div>


    <style>
    .snap {
        -ms-scroll-snap-type: x mandatory;
        scroll-snap-type: x mandatory;
        -ms-overflow-style: none;
        scroll-behavior: smooth;/*  To Firefox */
        scrollbar-width: none;
    }
    /*  To Chromium */
    .snap::-webkit-scrollbar {
        display: none;
    }

    .snap > div {
        scroll-snap-align: center;
    }
    </style>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</header>
