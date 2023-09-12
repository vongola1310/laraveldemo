<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Edición</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link href="{{ asset('bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Editar Sección</h2>
        <h4 class="text-center"> Aqui podras editar la fecha si ocurrio algun error o cambio</h4>
        <form action="{{ route('form.update', $datos->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="titulo">Título de la Sección:</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $datos->titulo }}">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="4">{{ $datos->descripcion }}</textarea>
            </div>
            <div class="form-group">
                <label for="imagen">Imagen Actual:</label>
                <img class="img-fluid" src="{{asset($datos->imagen) }}" alt="Imagen Actual">
            </div>
            <div class="form-group">
                <label for="nueva-imagen">Seleccionar Nueva Imagen:</label>
                <input type="file" class="form-control-file" id="nueva-imagen" name="imagen" required>
            </div>
            
            <div class="form-group">
                <label for="date">Seleccionar Nueva fecha</label>
                <input type="date" class="form-control-file" id="nueva-fecha" name="date" value="{{$datos->date}}" required>

            </div>
            <!-- Agrega otros campos para editar según sea necesario -->
            <div class="text-center">
                <button type="submit" class="btn btn-success">Guardar Cambios</button>
                <a href="{{ route('edit.show', ['id'=>1]) }}" class="btn btn-primary my-2">Volver</a>
            </div>
           
        </form>
    </div>

    <!-- Scripts de Bootstrap y jQuery (asegúrate de tener las referencias a jQuery) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>