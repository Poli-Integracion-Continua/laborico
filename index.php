<!DOCTYPE html>
<html>
 <?php
  include 'views/head.php'
 ?>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!--<a class="navbar-brand" href="#"></a>-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Registro</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Categorías</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Profesionales</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contratarServicio.php">Agenda de servicios</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contáctanos</a>
                </li>
              </ul>
            </div>          
          </nav>
    </header>

    <div class="container">
      <br><br>
        <div class="jumbotron">
            <h1 class="display-4">Hola, Bienvenido a Laborico.com!</h1>
            <p class="lead">Esta es una plataforma donde encontraras el profesional que necesitas en el momento justo.</p>
            <hr class="my-4">
            <p  class="texto1">Haz parte de nuestra red de profesionales con un clik o ingresa a consultar nuesto registro de espacialidades.</p>
            <p class="lead">
              <a class="btn btn-primary btn-lg" href="#" role="button">Iniciar sesión</a>
              <a class="btn btn-primary btn-lg" href="#" role="button">Registrarse</a>
            </p>
        </div>
          <a href="index.php"><input type="button" class="btn btn-primary"  value="Agendar cita"></a>         
    </div>
</body>
</html>