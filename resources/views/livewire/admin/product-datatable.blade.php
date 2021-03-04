<section class="bg-white rounded-lg shadow-lg py-6">
    <div class="block mx-6 px-1 md:px-6 flex justify-between flex-wrap items-center">
        @if ($count !== 0)
            <div class="bg-red-400 mx-1 my-1 min-w-full p-3 border-red-500 rounded-md border-2 text-white-1">
                <p>Se debe reabastecer el stock de {{ $count }} productos</p>
            </div>
        @endif

        <div class="flex items-center my-1">
            <select wire:model="perPage" class="bg-white h-10 px-5 pr-10 rounded-md text-sm focus:outline-none border-gray-300 focus:border-gray-900 mx-1">
                <option value="10">10 por página</option>
                <option value="15">15 por página</option>
                <option value="25">25 por página</option>
            </select>

            <label class="inline-flex items-center mx-1">
                <input type="checkbox" class="form-checkbox h-5 w-5 text-orange-600" wire:click="filterStock" id="checkBox">
                <script>
                    document.getElementById('checkBox').checked=false;
                </script>
                <span class="ml-2 text-gray-700">Stock en 0</span>
            </label>
        </div>

        <div class="text-gray-600 my-2 flex justify-between flex-grow sm:flex-grow-0 items-center space-x-3 mx-1">
            <input wire:model="search" type="search" name="search" placeholder="Buscar por código o nombre" class="bg-white h-10 px-5 pr-10 rounded-md text-sm focus:outline-none border-gray-300 focus:border-gray-900 flex-grow">
            @if ($search !== '')
                <button wire:click="clearSearch" type="clear" class="px-4 py-2 border rounded-md border-gray-300">
                    X
                </button>
            @endif      
        </div>
    </div>

    <div class="block overflow-x-auto mx-6" x-data="{ open: false }">
        <table class="w-full text-left rounded-lg text-center">
            <thead>
                <tr class="text-gray-800 border border-b-0">
                    <th class="px-4 py-3">Código</th>
                    <th class="px-4 py-3">Nombre</th>
                    <th class="px-4 py-3">Stock</th>
                    <th class="px-4 py-3">Precio Unitario</th>
                    <th class="px-4 py-3">Precio Total</th>
                    <th class="px-4 py-3">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <div class="absolute z-50 top-0 left-0 right-0 flex items-center justify-center sm:w-full sm:h-full bg-gray-400" x-show="open">
                    <div class="relative py-3 sm:max-w-xl sm:mx-auto" @click.away="open = false">
                        <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                            <div class="max-w-md mx-auto">
                                <div class="flex items-center flex-wrap">
                                    <div class="min-w-full block font-semibold text-xl self-start text-gray-700">
                                        <h2 class="block leading-relaxed">Producto</h2>
                                        <p class="block text-sm">Actualizado: {{ $actualizacionProduct }}</p>
                                    </div>
                                    <div class="divide-y divide-gray-200">
                                        <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                            <div class="flex flex-col">
                                                <img src="{{ $imagenProduct }}">
                                            </div>
                                            <div class="flex flex-col">
                                                <label class="leading-loose" for="codigo">Código</label>
                                                <input type="text" class="px-4 py-2 border w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600 bg-gray-200" id="codigo" name="codigo" wire:model="codigoProduct" readonly>
                                            </div>
                                            <div class="flex flex-col">
                                                <label class="leading-loose" for="nombre">Nombre</label>
                                                <input type="text" class="px-4 py-2 border w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600 bg-gray-200" id="nombre" name="nombre" wire:model="nombreProduct" readonly>
                                            </div>
                                            <div class="flex items-center space-x-4">
                                                <div class="flex flex-col">
                                                    <label class="leading-loose" for="precio">Precio</label>
                                                    <input type="number" step="0.01" class="px-4 py-2 border w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600 bg-gray-200" id="precio" name="precio" wire:model="precioProduct" readonly>
                                                </div>
                                                <div class="flex flex-col">
                                                    <label class="leading-loose" for="stock">Stock</label>
                                                    <input type="number" class="px-4 py-2 border w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600 bg-gray-200" id="stock" name="stock" wire:model="stockProduct" readonly>
                                                </div>
                                            </div>
                                            <div class="flex flex-col">
                                                <label class="leading-loose" for="descripcion">Descripción</label>
                                                <textarea class="px-4 py-2 border w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600 bg-gray-200" rows="4" id="descripcion" name="descripcion" wire:model="descripcionProduct" readonly></textarea>
                                            </div>
                                        </div>
                                        <div class="pt-4 flex items-center space-x-4">
                                            <button @click="open = false" class="flex justify-center items-center w-full text-gray-900 px-4 py-3 rounded-md focus:outline-none" type="reset">
                                                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                                </svg> Cerrar
                                            </button>
                                            @if($codigoProduct !== null)
                                                <a class="flex justify-center items-center w-full" href="{{ route('admin.product.edit', ['product' => $codigoProduct]) }}">
                                                    <button type="button" class="bg-l-blue-2 text-white px-4 py-3 rounded-md focus:outline-none">
                                                        Editar
                                                    </button>
                                                </a>
                                                <a class="flex justify-center items-center w-full" href="{{ route('admin.product.show', ['product' => $codigoProduct]) }}">
                                                    <button type="button" class="bg-green-500 text-white px-4 py-3 rounded-md focus:outline-none">
                                                        Ver más
                                                    </button>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @if ($products->count())
                    @foreach ($products as $product)
                        <tr class="w-full font-light text-gray-700 bg-gray-100 whitespace-no-wrap border">
                            <td class="px-4 py-4">{{ $product->codigo }}</td>
                            <td class="px-4 py-4 text-left">{{ $product->nombre }}</td>
                            @if ($product->stock == 0)
                                <td class="px-4 py-4 bg-red-400 text-white-1">{{ $product->stock }}</td>
                            @else
                                <td class="px-4 py-4">{{ $product->stock }}</td>
                            @endif
                            <td class="px-4 py-4">{{ $product->precio }}</td>
                             <td class="px-4 py-4">{{ $product->precio_total }}</td>
                            <td class="py-4 flex justify-center content-center space-x-1.5">
                                <button wire:click="show({{ $product->codigo }})" class="text-indigo-400 hover:text-indigo-500 h-6 w-6" type="button" @click="open = true">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </button>
                                <form action="{{ route('admin.product.destroy', ['product' => $product->codigo]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-400 hover:text-red-500 h-6 w-6" type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="w-full font-light text-gray-700 bg-gray-100 whitespace-no-wrap border">
                        <td class="px-4 py-4" colspan="6">No hay resultados para "{{ $search }}"</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
    
    <div class="block overflow-x-auto mx-6 my-2">
        {{ $products->links() }}
    </div>
</section>