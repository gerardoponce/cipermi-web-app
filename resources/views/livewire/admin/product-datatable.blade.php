<section class="bg-white rounded-lg shadow-lg py-6">

    <div class="block mx-6 px-1 md:px-6 flex justify-between flex-wrap items-center">
        <select wire:model="perPage" class="bg-white h-10 px-5 pr-10 rounded-md text-sm focus:outline-none border-gray-300 focus:border-gray-900">
            <option value="10">10 por página</option>
            <option value="15">15 por página</option>
            <option value="25">25 por página</option>
        </select>

        <div class="text-gray-600 my-2">
            <input wire:model="search" type="search" name="search" placeholder="Buscar por código o nombre" class="bg-white h-10 px-5 pr-10 rounded-md text-sm focus:outline-none border-gray-300 focus:border-gray-900">
            @if ($search !== '')
                <button wire:click="clearSearch" type="clear" class="px-4 py-2 border rounded-md border-gray-300">
                    X
                </button>
            @endif      
        </div>
    </div>

    <div class="block overflow-x-auto mx-6">
        <table class="w-full text-left rounded-lg">
            <thead>
                <tr class="text-gray-800 border border-b-0">
                    <th class="px-4 py-3">Código</th>
                    <th class="px-4 py-3">Nombre</th>
                    <th class="px-4 py-3">Stock</th>
                    <th class="px-4 py-3">Precio Unitario</th>
                    <th class="px-4 py-3">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @if ($products->count())
                    @foreach ($products as $product)
                        <tr class="w-full font-light text-gray-700 bg-gray-100 whitespace-no-wrap border">
                            <td class="px-4 py-4">{{ $product->codigo }}</td>
                            <td class="px-4 py-4">{{ $product->nombre }}</td>
                            <td class="px-4 py-4">{{ $product->stock }}</td>
                            <td class="px-4 py-4">{{ $product->precio }}</td>
                            <td class="text-center py-4">
                                <a href="#"><span class="fill-current text-green-500 material-icons">edit</span></a>
                                <a href="#"><span class="fill-current text-red-500 material-icons">highlight_off</span></a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="w-full font-light text-gray-700 bg-gray-100 whitespace-no-wrap border">
                        <td class="px-4 py-4" colspan="5">No hay resultados para "{{ $search }}"</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
    
    <div class="block overflow-x-auto mx-6 my-2">
        {{ $products->links() }}
    </div>
</section>
