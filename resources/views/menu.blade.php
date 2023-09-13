<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="{{ asset('img/logobien.png') }}" type="image/x-icon">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body{
            margin:0;
            padding: 0;
            font-family: sans-serif;
        }

        .color-container{
            width: 16px;
            height: 16px;
            display: inline-block;
            border-radius: 4px;
        }
        a{
            text-decoration: none;
        }
        .imagen{
            text-align: right;
        }
    </style>

   
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('nosotros', []) }}">Nosotros</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Productos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">EUROIMMUN</a></li>
                        <li><a class="dropdown-item" href="#">HELENA</a></li>
                        <li><a class="dropdown-item" href="">DEMEDITEC</a></li>
                        <li><a class="dropdown-item" href="#">OXFORD</a></li>
                        <li><a class="dropdown-item" href="#">GENEALL</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('secciones')}}">Eventos</a>
                </li>
              
            </ul>
            <!-- Aquí se agrega la imagen en el lado derecho -->
            <ul class="navbar-nav ml-auto">
                <li class="imagen  nav-item">
                    <a class="nav-link" href="#">
                        <img src="{{ asset('img/EUROIMMUN-INOCHEM.png') }}" alt="Imagen" width="30%">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <div class="menu">
    @yield('content')
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>