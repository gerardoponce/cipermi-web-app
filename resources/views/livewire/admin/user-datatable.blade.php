<div>
    
    @if ($errors->any())
    <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-red-500 my-2 mx-6">
        <ul>
            @foreach ($errors->all() as $error)
            <li class="capitalize">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if($updateMode)
        @include('livewire.admin.user.update')
    @else
        @include('livewire.admin.user.create')
    @endif
    
    <section class="overflow-x-auto m-4">
        <table class="w-full rounded-lg text-center">
            <thead>
                <tr class="text-gray-800 border border-b-0">
                    <th class="px-4 py-3">DNI</th>
                    <th class="px-4 py-3">Nombre</th>
                    <th class="px-4 py-3">Apellido</th>
                    <th class="px-4 py-3">Email</th>
                    <th class="px-4 py-3">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr class="w-full font-light text-gray-700 bg-gray-100 whitespace-no-wrap border">
                        <td class="px-4 py-2">{{ $user->dni }}</td>
                        <td class="px-4 py-2">{{ $user->nombre }}</td>
                        <td class="px-4 py-2">{{ $user->apellido }}</td>
                        <td class="px-4 py-2">{{ $user->email }}</td>
                            <td class="py-4 flex justify-center content-center space-x-1.5">
                                <button wire:click="edit({{ $user->id }})" class="text-indigo-400 hover:text-indigo-500 h-6 w-6" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </button>
                                <button class="text-red-400 hover:text-red-500 h-6 w-6" wire:click="destroy({{ $user->id }})">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </td>
                    </tr>
                @empty
                    <tr class="text-center">
                        <td colspan="5" class="py-3 italic">No hay información</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </section>
</div>