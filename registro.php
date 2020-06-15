<?php
    include 'views/header.php';
?>

<div class="container mt-3">
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Correo Electronico</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Contraseña</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Direccion</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Calle 100 ">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Direccion 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, bloque etc">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div>


<?php
    include 'views/footer.php';
?>