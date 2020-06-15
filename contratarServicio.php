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
                  <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
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
            <h1 class="display-4">Inscríbete ahora y comienza a recibir ofertas de trabajo</h1>
            <p class="lead">Pendiente definir los campos.</p>
            <hr class="my-4">
        </div>

    
    <form>
    <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Tu nombre completo:</label> 
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fa fa-address-card"></i>
            </div>
            </div> 
            <input id="text" name="text" type="text" class="form-control">
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Edad:</label> 
        <div class="col-8">
        <input id="text1" name="text1" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">Dirección de contacto:</label> 
        <div class="col-8">
        <input id="text2" name="text2" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="textarea" class="col-4 col-form-label">¿Qué sabes hacer?:</label> 
        <div class="col-8">
        <textarea id="textarea" name="textarea" cols="40" rows="5" class="form-control"></textarea>
        </div>
    </div> 
    <div class="form-group row">
        <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </div>
    </form>    
</div>
    
 </body>
 </html>