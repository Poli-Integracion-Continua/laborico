<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="style.css">
<head>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
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
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Registro</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Categorias</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Profesionales</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="index.php">Agenda de servicios</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contactanos</a>
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
              <a class="btn btn-primary btn-lg" href="#" role="button">Registarse</a>
            </p>
          </div>
          <a href="index.php"><input type="button" value="Agendar cita"></a>         
    </div>
</body>
</html>