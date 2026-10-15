<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Materia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1>Editar Materia</h1>
    <form action="{{ route('materias.update', $materia->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nombre:</label>
            <input type="text" name="nombre" value="{{ $materia->nombre }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Créditos:</label>
            <input type="number" name="creditos" value="{{ $materia->creditos }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Profesor:</label>
            <input type="text" name="profesor" value="{{ $materia->profesor }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('materias.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</body>
</html>