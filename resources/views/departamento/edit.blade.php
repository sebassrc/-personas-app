<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Departamento') }}
        </h2>
    </x-slot>
    <div class="container">
        <h1>Edit Departamento</h1>
        <form method="POST" action="{{ route('departamentos.update', ['departamento' => $departamento->depa_codi]) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="text" class="form-control" id="id" name="id" value="{{ $departamento->depa_codi }}" disabled>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nombre del Departamento</label>
                <input type="text" required class="form-control" id="name" name="name" value="{{ $departamento->depa_nomb }}">
            </div>
            <div class="mb-3">
                <label for="code" class="form-label">Código de País</label>
                <input type="text" required class="form-control" id="code" name="code" value="{{ $departamento->pais_codi }}">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('departamentos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</x-app-layout>
