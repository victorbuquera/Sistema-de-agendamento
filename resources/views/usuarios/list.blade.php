<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-center font-semibold text-3xl">Clientes cadastrados</h1>
                    @foreach($clientes as $u)
                        <p class="text-center pt-5">{{ $u->nome }} | {{$u->email}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
