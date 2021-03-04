<x-guest-layout><div class="font-sans">
    <x-slot name="header">
        @include('layouts.auth-navigation')
    </x-slot>

    <div class="py-28 sm:py-0 relative sm:min-h-screen flex flex-col sm:justify-center items-center bg-gray-100 ">
    
        <div class="py-2">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
        </div>
        <div class="relative sm:max-w-sm">
            <div class="card bg-l-blue-2 shadow-lg  w-full h-full rounded-3xl absolute  transform -rotate-6"></div>
            <div class="card bg-orange-1 shadow-lg  w-full h-full rounded-3xl absolute  transform rotate-6"></div>
            <div class="relative w-full rounded-3xl  px-6 py-4 bg-gray-100 shadow-md">
                <h2 class="block text-lg text-gray-700 text-center font-semibold">
                    Iniciar sesión
                </h2>
                <form method="POST" action="{{ route('login') }}" class="mt-10">
                    @csrf
                    <div>
                        <input type="email" placeholder="Email" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0" name="email">
                    </div>
        
                    <div class="mt-7">                
                        <input type="password" placeholder="*****" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0" name="password">                           
                    </div>
        
                    <div class="mt-7">
                        <div class="flex justify-center items-center">
                            <button type="submit" class="border border-l-blue-3 bg-l-blue-3 text-white-1 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-l-blue-4 focus:outline-none focus:shadow-outline">
                                Contáctanos
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</x-guest-layout>
