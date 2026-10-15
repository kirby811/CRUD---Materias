<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Materia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1>Crear Nueva Materia</h1>
    
    <form action="{{ route('materias.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="creditos" class="form-label">Créditos</label>
            <input type="number" class="form-control" id="creditos" name="creditos" required>
        </div>
        <div class="mb-3">
            <label for="profesor" class="form-label">Profesor</label>
            <input type="text" class="form-control" id="profesor" name="profesor" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('materias.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</body>
</html>