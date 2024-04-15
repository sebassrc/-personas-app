<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de Municipios') }}
        </h2>
    </x-slot>

    <div class="container mx-auto py-6">
        <a href="{{ route('municipios.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mb-4">Agregar</a>
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2">Código</th>
                    <th class="px-4 py-2">Municipio</th>
                    <th class="px-4 py-2">Departamento</th>
                    <th class="px-4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($municipios as $municipio)
                <tr>
                    <td class="border px-4 py-2">{{ $municipio->muni_codi }}</td>
                    <td class="border px-4 py-2">{{ $municipio->muni_nomb }}</td>
                    <td class="border px-4 py-2">{{ $municipio->depa_codi }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('municipios.edit', ['municipio' => $municipio->muni_codi]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</a>
                        <form action="{{ route('municipios.destroy', ['municipio' => $municipio->muni_codi]) }}" method="POST" style="display: inline-block">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-2">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
