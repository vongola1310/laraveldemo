<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- Agregar enlaces a los archivos de Bootstrap -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
    <title>Document</title>
</head>
<body>
    
    <title>Formulario de Secciones de Blog</title>
      


    <div class="container mt-5">
        <h2>Crear Nueva Sección</h2>
        <form action="{{ route('agregar')}}" method="post" enctype="multipart/form-data">
            @csrf 
            <div class="form-group">
                <label for="titulo">Título de la Sección:</label>
                <input type="text" class="form-control" id="Titulo" name="titulo" required>
            </div>
            <div class="form-group">
                <label for="contenido">Contenido:</label>
                <textarea class="form-control" id="Descripcion" name="descripcion" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="imagen">Seleccionar Imagen:</label>
                <input type="file" class="form-control-file" id="imagen" name="imagen" required>
            </div>

            <div class="form-group">
                <label for="date">Seleccionar Fecha:</label>
                <input type="date" class="form-control-file" id="date" name="date" required>
            </div>
            <button type="submit" class="btn btn-success">Crear Sección</button>
        </form>
    </div>

</body>
</html>


    


