<?php 
    //Inclusion de header con libreria
    include 'views/header.php'
?>
<div class="container">
<form>
  <div class="form-group mt-3">
    <label for="exampleInputEmail1">Correo electrónico</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su correo">
    <small id="emailHelp" class="form-text text-muted">Su correo no sera utilizado con uso de publicidad.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Asunto</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Escriba si asunto aqui">  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Mensaje</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-row">
      <div class="form-group col-md-6 text-center mt-4">
        <a href="index.php" class="btn btn-secondary btn-block">Cancelar</a>
      </div>
      <div class="form-group col-md-6 text-center mt-4">
        <button type="submit" class="btn btn-primary btn-block">Enviar</button>
      </div>      
    </div>
</form>
</div>
<?php
    include 'views/footer.php'
?>