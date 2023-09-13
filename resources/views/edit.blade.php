<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link href="{{ asset('bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('product.css') }}" rel="stylesheet">
<title>Eventos Proximos</title>

<body>



  <main role="main">

    <section class="jumbotron text-center">
      <div class="container">
        <img src="{{ asset('img/EUROIMMUN-INOCHEM.png') }}" width="80%">
      
        <p class="lead text-muted">Elimina o edita las secciones</p>
        <p>
          
          <a href="{{ url('/secciones')}}" class="btn btn-secondary my-2">Inicio</a>
        </p>
      </div>
    </section>
    
<div class="album py-5 bg-light">
  <div class="container">

    <div class="row">
      
   @foreach ($datos as $dato)  
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="{{asset($dato->imagen) }}">
          <div class="card-body">
            <p class="card-text">{{$dato->titulo}}</p>
            <p class="card-text">{{$dato->descripcion}}</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
               <a href="{{ route('form.edit', $dato->id) }}"> <button type="button" class="btn btn-sm btn btn-success">Editar</button></a>

               <form action="{{ route('form.destroy', $dato->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn btn-danger">Eliminar</button>
            </form>
               
                
              </div>
              <small class="text-muted">Fecha de inicio:    {{$dato->date}}</small>
            </div>
          </div>
        </div>
      </div>
    @endforeach
      </div>
    </div>
  </div>
</div>
</main>
</body>
</html>