<div class="mx-1 sm:mx-10 my-4">
    <div class="px-1 py-10 bg-gray-100 mx-8 md:mx-0 shadow rounded-3xl sm:p-5">
        <div class="flex flex-wrap justify-center items-center">
            <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7 p-2">
                <div class="flex justify-center justify-items-center flex-wrap flex-grow space-x-1 space-y-1 sm:space-y-0">
                    <input type="hidden" wire:model="selected_id">
                    <div class="flex flex-col">
                        <label class="leading-loose" for="nombre">Nombre</label>
                        <input type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" id="nombre" name="nombre" wire:model="nombre">
                    </div>
                    <div class="flex flex-col">
                        <label class="leading-loose" for="apellido">Apellido</label>
                        <input type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" id="apellido" name="apellido" wire:model="apellido">
                    </div>
                    <div class="flex flex-col">
                        <label class="leading-loose" for="dni">DNI</label>
                        <input type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" id="dni" name="dni" wire:model="dni">
                    </div>
                    <div class="flex flex-col">
                        <label class="leading-loose" for="email">Email</label>
                        <input type="email" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" id="email" name="email" wire:model="email">
                    </div>
                    <div class="flex flex-col">
                        <label class="leading-loose" for="password">Contraseña</label>
                        <input type="password" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" id="password" name="password" wire:model="password">
                    </div>
                </div>
            </div>
            <div class="pt-4 flex items-center space-x-4 flex-shrink p-2">
                <button type="button" class="bg-l-blue-3 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none" wire:click="update()">
                    Actualizar
                </button>
            </div>
        </div>
    </div>
</div>