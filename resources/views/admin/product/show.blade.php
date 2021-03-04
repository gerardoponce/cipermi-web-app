<x-app-layout>

    <section class="mt-6 mx-6 flex flex-wrap justify-center space-x-2">
        <div class="py-3 sm:max-w-xl">
                <div class="px-4 py-10 bg-gray-100 mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                    <div class="max-w-md">
                        <div class="flex items-center flex-wrap">
                            <div class="min-w-full block font-semibold text-xl self-start text-gray-700 flex justify-center">
                                <h2 class="leading-relaxed">Producto</h2>
                            </div>
                            <div class="divide-y divide-gray-200">
                                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex flex-col flex-grow">
                                            <p class="block text-sm">Creado: {{ $product->created_at }}</p>
                                        </div>
                                        <div class="flex flex-col flex-grow">
                                            <p class="block text-sm">Actualizado: {{ $product->updated_at }}</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="leading-loose" for="codigo">Código</label>
                                        <input type="text" class="px-4 py-2 border w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600 bg-gray-200" id="codigo" name="codigo" value="{{ $product->codigo }}" readonly>
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="leading-loose" for="nombre">Nombre</label>
                                        <input type="text" class="px-4 py-2 border w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600 bg-gray-200" id="nombre" name="nombre" value="{{ $product->nombre }}" readonly>
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="leading-loose" for="descripcion">Descripción</label>
                                        <textarea class="px-4 py-2 border w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600 bg-gray-200" rows="4" id="descripcion" name="descripcion" readonly>{{ $product->descripcion }}</textarea>
                                    </div>
                                </div>
                                <div class="pt-4 flex items-center space-x-4">
                                    <a class="flex justify-center items-center w-full" href="{{ route('admin.product.edit', ['product' => $product->codigo]) }}">
                                        <button type="button" class="bg-l-blue-2 text-white px-4 py-3 rounded-md focus:outline-none">
                                            Editar
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="space-y-0">
            <div class="py-3 lg:pb-1.5 pt-3 sm:max-w-xl">
                <div class="px-4 py-5 bg-gray-100 mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                    <div class="max-w-md">
                        <div class="flex flex-col">
                            <label class="leading-loose" for="imagen_portada">Imagen de portada</label>
                            <img src="{{ $product->imagen_portada }}" id="imagen_portada">
                        </div>
                        <div class="flex items-center">
                            <div class="flex flex-col flex-grow">
                                <label class="leading-loose" for="alt_imagen_portada">Texto alternatvo de la imagen</label>
                                <textarea class="px-4 py-2 border w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600 bg-gray-200" rows="3" id="alt_imagen_portada" name="alt_imagen_portada" readonly>{{ $product->alt_imagen_portada }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-3 lg:pt-1.5 lg:pb-3 sm:max-w-xl">
                <div class="px-4 py-5 bg-gray-100 mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                    <div class="max-w-md">
                        <div class="flex items-center space-x-4">
                            <div class="flex flex-col">
                                <label class="leading-loose" for="precio">Precio</label>
                                <input type="number" step="0.01" class="px-4 py-2 border w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600 bg-gray-200" id="precio" name="precio" value="{{ $product->precio }}" readonly>
                            </div>
                            <div class="flex flex-col">
                                <label class="leading-loose" for="stock">Stock</label>
                                <input type="number" class="px-4 py-2 border w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600 bg-gray-200" id="stock" name="stock" value="{{ $product->stock }}" readonly>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <h3 class="leading-loose">Precio total</h3>
                            <p class="px-4 py-2 border w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600 bg-gray-200">{{ $product->precio_total }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-3 sm:max-w-xl">
             <div class="px-4 py-10 bg-gray-100 mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                <div class="max-w-md">
                    <div class="flex flex-col">
                        <h3 class="leading-loose">Producto en portada del sitio web</h3>
                        <p class="px-4 py-2 border w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600 bg-gray-200">
                            @if($product->producto_portada == True ) Sí @else No @endif
                        </p>
                    </div>
                </div>
             </div>
        </div>
    </section>
</x-app-layout>                    