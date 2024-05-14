<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Municipio') }}
        </h2>
    </x-slot>

    <div class="container mx-auto py-6">
        <form method="POST" action="{{ route('municipios.update', ['municipio' => $municipio->muni_codi]) }}">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="code" class="block text-gray-700 text-sm font-bold mb-2">Codigo del Municipio:</label>
                <input type="text" name="code" id="code" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ $municipio->muni_codi }}" disabled />
            </div>
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre del Municipio:</label>
                <input type="text" name="name" id="name" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ $municipio->muni_nomb }}" />
            </div>
            <div class="mb-4">
                <label for="department_id" class="block text-gray-700 text-sm font-bold mb-2">Codigo del Departamento:</label>
                <input type="text" name="department_id" id="department_id" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ $municipio->depa_codi }}" />
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Guardar</button>
                <a href="{{ route('municipios.index') }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded ml-2">Cancelar</a>
            </div>
        </form>
    </div>
    @include('footer')
</x-app-layout>
