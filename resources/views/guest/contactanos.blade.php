<x-guest-layout>
@include('layouts.navigation')
<main class="bg-white-1 text-center">

    <div class="mx-auto md:p-6">
        <h3 class="py-2 my-2 text-xl">Oficina Principal</h3>
        <div class="aspect-w-16 aspect-h-9 lg:aspect-none">
            <iframe class="lg:w-full lg:h-96" src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d975.6749748426155!2d-77.0018587!3d-11.9952552!3m2!1i1024!2i768!4f13.1!2m1!1sJr%20platinos%20656%2C%20Cercado%20de%20Lima!5e0!3m2!1ses-419!2spe!4v1613356682741!5m2!1ses-419!2spe" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
    <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 pb-6 px-2">
        
        @if ($errors->any())
            <div class="w-full sm:max-w-md mt-4 px-2 py-4 bg-red-500 overflow-hidden sm:rounded-lg text-white-1">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="my-0.5">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="w-full sm:max-w-md mt-4 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <form action="" method="POST">
            @csrf
                <section class="mx-auto">
                    <div>
                        <x-label for="nombre" :value="__('Su nombre')" />
                        <x-input id="nombre" class="block w-full" type="text" name="nombre" :value="old('nombre')" required autofocus />
                    </div>
                    <div>
                        <x-label for="correo" :value="__('Su correo')" />
                        <x-input id="correo" class="block w-full" type="text" name="correo" :value="old('correo')" required autofocus />
                    </div>
                    <div>
                        <x-label for="asunto" :value="__('Asunto')" />
                        <x-input id="asunto" class="block w-full" type="text" name="asunto" :value="old('asunto')" required autofocus />
                    </div>
                    <div>
                        <x-label for="mensaje" :value="__('Su mensaje')" />
                        <x-input id="mensaje" class="block w-full" type="text" name="mensaje" :value="old('mensaje')" required autofocus />
                    </div>
                    <button type="submit" class="border border-orange-1 bg-orange-1 text-white-1 rounded-md px-4 py-2 mt-6 mb-2 transition duration-500 ease select-none hover:bg-orange-2 focus:outline-none focus:shadow-outline">
                            Enviar mensaje
                        </button>
                </section>
            </form>
        </div>
    </div>

</main>
@include('layouts.footer')
</x-guest-layout>