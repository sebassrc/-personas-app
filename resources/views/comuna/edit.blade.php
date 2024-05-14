<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Comuna') }}
        </h2>
    </x-slot>
    <div class="container">
        <h1>Edit Comuna</h1>
        <form action="{{ route('comunas.update', ['comuna' => $comuna->comu_codi]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="id">Código</label>
                <input type="text" id="id" name="id" value="{{ $comuna->comu_codi }}" disabled>
            </div>

            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" id="name" name="name" value="{{ $comuna->comu_nomb }}">
            </div>

            <div class="form-group">
                <label for="code">Código de Municipio</label>
                <input type="text" id="code" name="code" value="{{ $comuna->muni_codi }}">
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
    @include('footer')
</x-app-layout>
