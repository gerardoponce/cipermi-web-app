<x-app-layout>

    <section class="mt-6 mx-6 flex flex-wrap justify-around">
            <div class="py-3 sm:max-w-xl">
                <div class="px-4 py-10 bg-gray-100 mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                    <div class="max-w-md mx-auto">
                        <div class="flex items-center flex-wrap">
                            <div class="min-w-full block font-semibold text-xl self-start text-gray-700 flex justify-center">
                                <h2 class="leading-relaxed">Producto</h2>
                            </div>
                            <form class="divide-y divide-gray-200" method="POST" action="{{ route('admin.product.update', ['product' => $product->codigo]) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                    <div class="flex flex-col">
                                        <label class="leading-loose" for="codigo">Código</label>
                                        <input type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" id="codigo" name="codigo" value="{{ $product->codigo }}">
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="leading-loose" for="nombre">Nombre</label>
                                        <input type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" id="nombre" name="nombre" value="{{ $product->nombre }}">
                                    </div>
                                    <div class="flex items-center space-x-4">
                                        <div class="flex flex-col">
                                            <label class="leading-loose" for="precio">Precio</label>
                                            <input type="number" step="0.01" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" id="precio" name="precio" value="{{ $product->precio }}">
                                        </div>
                                        <div class="flex flex-col">
                                            <label class="leading-loose" for="stock">Stock</label>
                                            <input type="number" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" id="stock" name="stock" value="{{ $product->stock }}">
                                        </div>
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="leading-loose" for="descripcion">Descripción</label>
                                        <textarea class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" rows="4" id="descripcion" name="descripcion">{{ $product->descripcion }}</textarea>
                                    </div>
                                    <div class="flex flex-col">
                                        <img src="{{ $product->imagen_portada }}">
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
                                            <textarea class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" rows="3" id="alt_imagen_portada" name="alt_imagen_portada">{{ $product->alt_imagen_portada }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-4 flex items-center space-x-4">
                                    <button type="submit" class="bg-l-blue-3 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">
                                        Actualizar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

    </section>

</x-app-layout>