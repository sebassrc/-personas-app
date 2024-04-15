<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="https://servicios.cecep.edu.co/Web_Spartacus/img/logo_vertical.svg" type="image/png">

    <title>Edit Municipio</title>
</head>
<body>
    
<div class="container">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Personas</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="http://127.0.0.1:8000/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/comunas">Comunas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/municipios">Municipios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/departamentos">Departamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/paises">Paises</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h1>Edit Municipio</h1>
    <form method="POST" action="{{ route('municipios.update', ['municipio' => $municipio->muni_codi]) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="code" class="form-label">Código</label>
            <input type="text" class="form-control" id="code" aria-describedby="codeHelp" name="code" value="{{ $municipio->muni_codi }}" disabled>
            <div id="codeHelp" class="form-text">Municipio code</div>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Municipio</label>
            <input type="text" required class="form-control" id="name" aria-describedby="nameHelp" name="name" value="{{ $municipio->muni_nomb }}">
        </div>
        <div class="mb-3">
            <label for="department_id" class="form-label">Código de Departamento</label>
            <input type="text" required class="form-control" id="department_id" aria-describedby="departmentIdHelp" name="department_id" value="{{ $municipio->depa_codi }}">
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('municipios.index') }}" class="btn btn-warning">Cancel</a>
        </div>
    </form>
</div>
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
