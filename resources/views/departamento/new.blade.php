<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agregar Departamentp') }}
        </h2>
    </x-slot>

    <div class="container mx-auto py-6">
        <form action="{{ route('departamentos.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre del Departamento:</label>
                <input type="text" name="name" id="name" class="form-input rounded-md shadow-sm mt-1 block w-full" />
            </div>
            <div class="mb-4">
                <label for="code" class="block text-gray-700 text-sm font-bold mb-2">Codigo del pais:</label>
                <input type="text" name="code" id="code" class="form-input rounded-md shadow-sm mt-1 block w-full" />
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Crear departamento
                </button>
            </div>
        </form>
    </div>
    @include('footer')
</x-app-layout>
