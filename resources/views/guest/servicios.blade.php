<x-guest-layout>
    <x-slot name="header">
        @include('layouts.guest-navigation')
    </x-slot>

    <section class="flex flex-wrap justify-center items-center sm:flex-nowrap px-6 md:px-28 py-4 bg-l-blue-2">
        <section class="sm:flex-shrink text-white-1 lg:w-2/4 py-4 px-4">
            <h2 class="text-2xl md:text-4xl">Servicios</h2>
            <p class="text-sm md:text-xl md:text-justify">Cipermi brinda servicios a clientes comerciales. Para nosotros, todos los trabajos son importates; sean grandes o pequeños. Por eso, nos esforzamos en brindarles el mejor servicio</p>
        </section>
        <a href="{{ route('contactanos') }}" class="sm:flex-grow flex justify-center my-2 mx-12">
            <button type="button" class="border border-orange-1 bg-orange-1 text-white-1 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-orange-2 focus:outline-none focus:shadow-outline text-xl md:text-2xl">
                Contáctanos
            </button>
        </a>
    </section>

    <main>
        <section class="bg-white-1">
            @foreach ($servicios as $servicio)
                <article class="hidden md:grid md:grid-cols-2">
                    @if($servicio->estado == 0)
                        <div class="mx-4 my-2 p-1 md:mx-16 md:my-10 lg:mx-20 md:my-20 xl:mx-48">
                            <h3 class="font-bold my-1">{{ $servicio->nombre }}</h3>
                            <p class="my-1">{{ $servicio->descripcion }}</p>
                        </div>
                        <img class="object-cover w-full h-full" src="{{ $servicio->video_demostracion }}" alt="{{ $servicio->video_descripcion }}">
                    @else
                        <img class="object-cover w-full h-full" src="{{ $servicio->video_demostracion }}" alt="{{ $servicio->video_descripcion }}">
                        <div class="mx-4 my-2 p-1 md:mx-16 md:my-10 lg:mx-20 md:my-20 xl:mx-48">
                            <h3 class="font-bold my-1">{{ $servicio->nombre }}</h3>
                            <p class="my-1">{{ $servicio->descripcion }}</p>
                        </div>
                    @endif
                </article>
            @endforeach

            @foreach ($servicios as $servicio)
                <article class="grid grid-cols-1 md:hidden">
                    <div class="mx-4 my-2 p-1 md:mx-16 md:my-10 lg:mx-20 md:my-20 xl:mx-48">
                        <h3 class="font-bold my-1">{{ $servicio->nombre }}</h3>
                        <p class="my-1">{{ $servicio->descripcion }}</p>
                    </div>
                    <img class="object-cover w-full h-full" src="{{ $servicio->video_demostracion }}" alt="{{ $servicio->video_descripcion }}">
                </article>
            @endforeach
        </section>
    </main>

</x-guest-layout>