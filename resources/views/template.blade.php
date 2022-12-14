<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Template</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
        crossorigin="anonymous">
    <!-- sweetAlert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <!--Barra navegación-->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Practica GitHub</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home">Home</a>
              </li>
              <li class="nav-item">
                <!-- -->
                <a class="nav-link" href="{{route('formulario')}}">Registrar formulario</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('tabla')}}">Tabla</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

<!-- CONTENIDO DE LA PAGINA -->
@yield('contenido')

<!-- PIE DE PAGINA -->
    <div class="alert alert-warning" role="alert">
       KEVIN SAUL CAMPA BONILLA 2022 COPYRIGTH 
    </div>

<!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" 
        crossorigin="anonymous">
    </script>

</body>
</html>