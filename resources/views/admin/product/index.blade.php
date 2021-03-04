<x-app-layout>
    
    @if(session()->get('status'))
        <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-green-500 my-2 mx-6">
            <span class="inline-block align-middle mr-8">
                <b class="capitalize">{{ session()->get('status') }}</b>
            </span>
            <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none">
                <span>×</span>
            </button>
        </div>
    @endif

    @if ($errors->any())
    <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-red-500 my-2 mx-6">
        <ul>
            @foreach ($errors->all() as $error)
            <li class="capitalize">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <!-- modal div -->
    <section class="mt-6 mx-6" x-data="{ open: false }">

        <button class="mx-2 md:mx-7 px-4 py-2 text-white-1 bg-l-blue-3 rounded select-none no-outline focus:shadow-outline" @click="open = true">
            Agregar producto
        </button>

        <div class="absolute z-50 top-0 left-0 right-0 flex items-center justify-center sm:w-full sm:h-full bg-gray-400" x-show="open">
            <div class="relative py-3 sm:max-w-xl sm:mx-auto" @click.away="open = false">
                <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                    <div class="max-w-md mx-auto">
                        <div class="flex items-center flex-wrap">
                            <div class="min-w-full block font-semibold text-xl self-start text-gray-700 flex justify-center">
                                <h2 class="leading-relaxed">Nuevo producto</h2>
                            </div>
                            <form class="divide-y divide-gray-200" method="POST" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                    <div class="flex flex-col">
                                        <label class="leading-loose" for="codigo">Código</label>
                                        <input type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" id="codigo" name="codigo" placeholder="Poner código">
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="leading-loose" for="nombre">Nombre</label>
                                        <input type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" id="nombre" name="nombre" placeholder="Poner nombre">
                                    </div>
                                    <div class="flex items-center space-x-4">
                                        <div class="flex flex-col">
                                            <label class="leading-loose" for="precio">Precio</label>
                                            <input type="number" step="0.01" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" id="precio" name="precio" placeholder="S/ 0.00">
                                        </div>
                                        <div class="flex flex-col">
                                            <label class="leading-loose" for="stock">Stock</label>
                                            <input type="number" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" id="stock" name="stock" placeholder="0">
                                        </div>
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="leading-loose" for="descripcion">Descripción</label>
                                        <textarea class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" rows="4" id="descripcion" name="descripcion" placeholder="Opcional"></textarea>
                                    </div>
                                   <div class="flex items-center space-x-4 items-stretch">
                                        <div class="flex flex-col">
                                            <label class="leading-loose" for="imagen_portada">Imagen de portada</label>
                                            <div class="flex items-center justify-center bg-grey-lighter">
                                                <label class="flex flex-col items-center px-4 py-2 bg-white text-l-blue-3 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-l-blue-3 hover:text-white-1">
                                                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                        <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                                    </svg>
                                                    <span class="mt-2 text-base leading-normal">Seleccionar imagen</span>
                                                    <input type='file' class="hidden" name="imagen_portada"/>         
                                                </label>

                                            </div>
                                        </div>
                                        <div class="flex flex-col">
                                            <label class="leading-loose" for="alt_imagen_portada">Texto alternatvo de la imagen</label>
                                            <input type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" id="alt_imagen_portada" name="alt_imagen_portada" placeholder="Opcional">
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-4 flex items-center space-x-4">
                                    <button @click="open = false" class="flex justify-center items-center w-full text-gray-900 px-4 py-3 rounded-md focus:outline-none" type="reset">
                                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                        </svg> Cancelar
                                    </button>
                                    <button type="submit" class="bg-l-blue-3 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">
                                        Agregar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <livewire:admin.product-datatable />
</x-app-layout>
