<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agregar Municipio') }}
        </h2>
    </x-slot>

    <div class="container mx-auto py-6">
        <form method="POST" action="{{ route('municipios.store') }}">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre del Municipio:</label>
                <input type="text" name="name" id="name" class="form-input rounded-md shadow-sm mt-1 block w-full" placeholder="Nombre del Municipio" required />
            </div>
            <div class="mb-4">
                <label for="code" class="block text-gray-700 text-sm font-bold mb-2">Código del Municipio:</label>
                <input type="text" name="code" id="code" class="form-input rounded-md shadow-sm mt-1 block w-full" placeholder="Código del Municipio" required />
            </div>
            <div class="mb-4">
                <label for="department" class="block text-gray-700 text-sm font-bold mb-2">Departamento:</label>
                <select name="department_code" id="department" class="form-select rounded-md shadow-sm mt-1 block w-full" required>
                    <option value="" disabled selected>Seleccione un departamento</option>
                    @foreach($departamentos as $departamento)
                        <option value="{{ $departamento->depa_codi }}">{{ $departamento->depa_nomb }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Guardar
                </button>
                <a href="{{ route('municipios.index') }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded ml-2">Cancelar</a>
            </div>
        </form>
    </div>
</x-app-layout>
