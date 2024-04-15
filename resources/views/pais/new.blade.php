<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add País') }}
        </h2>
    </x-slot>

    <div class="container mx-auto py-6">
        <form method="POST" action="{{ route('paises.store') }}">
            @csrf
            <div class="mb-3">
                <label for="code" class="form-label">Code</label>
                <input type="text" class="form-control" id="code" aria-describedby="codeHelp" name="code" placeholder="País code." required>
                <div id="codeHelp" class="form-text">Country code</div>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">País</label>
                <input type="text" required class="form-control" id="name" aria-describedby="nameHelp" name="name" placeholder="País name.">
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('paises.index') }}" class="btn btn-warning">Cancel</a>
            </div>
        </form>
    </div>
</x-app-layout>
