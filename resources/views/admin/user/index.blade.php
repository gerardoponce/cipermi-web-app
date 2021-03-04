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

    <livewire:admin.user-datatable />
</x-app-layout>