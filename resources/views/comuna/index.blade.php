<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de Comunas') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Codigo</th>
                                <th scope="col">Comuna</th>
                                <th scope="col">Municipio</th>
                                <th scope="col">Actions</th>
                                <th>
                                    <a href="{{ route('comunas.create') }}" class="bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded ml-2">Agregar</a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comunas as $comuna)
                                <tr>
                                    <th scope="row">{{ $comuna->comu_codi }}</th>
                                    <td>{{ $comuna->comu_nomb }}</td>
                                    <td>{{ $comuna->muni_nomb }}</td>
                                    <td>
                                        <a href="{{ route('comunas.edit', ['comuna' => $comuna->comu_codi]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</a>
                                        <form action="{{ route('comunas.destroy', ['comuna' => $comuna->comu_codi]) }}" method='POST' style="display: inline-block">
                                            @method('delete')
                                            @csrf
                                            <input class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-2" type="submit" value="Eliminar">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
</x-app-layout>
