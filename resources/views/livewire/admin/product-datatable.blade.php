<section class="bg-white rounded-lg shadow-lg py-6">

    <div class="block overflow-x-auto mx-6">
        <input wire:model="search" type="text" class="" placeholder="Buscar código o nombre">
        <select wire:model="perPage">
            <option value="10">10 por página</option>
            <option value="15">15 por página</option>
            <option value="25">25 por página</option>
        </select>
        @if ($search !== '')
            <button wire:click="clear" type="clear">X</button>
        @endif
    </div>

    <div class="block overflow-x-auto mx-6">
        <table class="w-full text-left rounded-lg">
            <thead>
                <tr class="text-gray-800 border border-b-0">
                    <th class="px-4 py-3">Código</th>
                    <th class="px-4 py-3">Nombre</th>
                    <th class="px-4 py-3">Stock</th>
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
                            <td class="text-center py-4">
                                <a href="#"><span class="fill-current text-green-500 material-icons">edit</span></a>
                                <a href="#"><span class="fill-current text-red-500 material-icons">highlight_off</span></a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="w-full font-light text-gray-700 bg-gray-100 whitespace-no-wrap border">
                        <td class="px-4 py-4" colspan="4">No hay resultados para "{{ $search }}"</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
    {{ $products->links() }}
</section>
