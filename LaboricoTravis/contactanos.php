<?php 
    //Inclusion de header con libreria
    include 'views/header.php'
?>
<div class="container">
<form>
  <div class="form-group mt-3">
    <label for="exampleInputEmail1">Correo electronico</label>
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
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
<?php
    include 'views/footer.php'
?>