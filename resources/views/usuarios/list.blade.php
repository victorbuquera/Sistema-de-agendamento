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
                    <div class=>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Email</th>
                                <th scope="col">Opções</th>
                            </tr>
                            </thead>
                            <tbody>
                        @foreach($listaCliente as $u)
                            <tr>
                                <td>{{$u->nome}}</td>
                                <td>{{$u->email}}</td>
                                <td><a href="{{route('cliente.update',$u)}}">Editar</a>
                                    <form action="{{ route('cliente.destroy',$u) }}" method="POST">

                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                    <div class="text-center m-4">
                        <a type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                           href="{{route('cliente.create')}}">Cadastrar novo cliente
                        </a>
                        <a type="button" class="focus:outline-none text-white bg-blue-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                           href="{{ __('dashboard') }}">Voltar
                        </a>

                    </div>
            </div>
        </div>
    </div>
</x-app-layout>
