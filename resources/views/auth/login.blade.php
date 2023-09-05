@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

.logo{
    padding: 20px;
}

@media (min-width: 1025px) {
.h-custom-2 {
height: 100%;
}
}
       
       
   </style>
</head>
<body>
    <section class="vh-100">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6 text-black">
      
              <div class="px-5 ms-xl-4">
                <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                <div class="logo">
                    <img src="{{ asset('img/EUROIMMUN-INOCHEM.png') }}" alt="50%" width="50%">
                </div>
               
              </div>
      
              <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
      
                <form style="width: 25rem;">
      
                  <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Iniciar Sesión</h3>
      
                  <div class="form-outline mb-4">
                    <input type="email" id="form2Example18" name="correo" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example18">Direccion de correo</label>
                  </div>
      
                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example28" name="pass" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example28">Contraseña</label>
                  </div>
      
                  <div class="pt-1 mb-4">
                    <button class="btn btn-success" type="button">Entrar</button>
                  </div>
      
                 
                  <p> si no tienes cuenta comunicate con un adminmistrador</p>
      
                </form>
      
              </div>
      
            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
              <img src="{{ asset('img/portadalogin.jpg') }}"
                alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>
        </div>
    </div>
@endsection
