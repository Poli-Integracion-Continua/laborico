<?php
    include 'views/header.php';
?>

<div class="container mt-2">
  <h2>Registro De Clientes</h2>
</div>


<div class="container mt-3">
<form action="model/guardaRegistro.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Correo Electrónico</label>
      <input type="email" class="form-control" id="inputEmail4" autocomplete="Off" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Contraseña</label>
      <input type="password" class="form-control" autocomplete="Off" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Dirección</label>
    <input type="text" class="form-control" id="inputAddress" autocomplete="Off" placeholder="Calle 100 ">
  </div>  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Ciudad</label>
      <input type="text" class="form-control" autocomplete="Off" id="inputCity">
    </div>    
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Recuérdame
      </label>
    </div>
  </div>
  <div class="form-row">
      <div class="form-group col-md-6 text-center mt-4">
        <a href="index.php" class="btn btn-secondary btn-block">Cancelar</a>
      </div>
      <div class="form-group col-md-6 text-center mt-4">
        <button type="submit" class="btn btn-primary btn-block">Guardar</button>
      </div>      
    </div>
</form>
</div>


<?php
    include 'views/footer.php';
?>