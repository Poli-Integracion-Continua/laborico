<?php
  include 'views/header.php';
?>

<div class="container mt-2">
  <h2>Registro De Talentos</h2>
</div>

<div class="container mt-3">
  <form action="model/guardaRegistro.php" method="post">
    
    <!-- nombres -->
    <div class="form-group">
      <label for="inputName">Nombre completo:</label>
      <input type="text" class="form-control" id="inputName" autocomplete="Off" placeholder="">
    </div>
    
    <!-- direccion -->
    <div class="form-group">
      <label for="inputAddress">Dirección:</label>
      <input type="text" class="form-control" id="inputAddress" autocomplete="Off" placeholder="Calle 100 ">
    </div>
    <div class="form-group">
      <label for="inputAddress2">Complemento de la dirección:</label>
      <input type="text" class="form-control" id="inputAddress2" autocomplete="Off" placeholder="Apartamento, bloque etc">
    </div>

    <!-- Ciudad -->
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">Ciudad:</label>
        <input type="text" class="form-control" autocomplete="Off" id="inputCity">
      </div>

      <div class="form-group col-md-6">
        <label for="inputState">Estado Civil:</label>
        <select id="inputState" class="form-control">
          <option value="0">...</option>
          <option value="1">Soltero</option>
          <option value="1">Casado</option>
          <option value="1">Unión Libre</option>
        </select>
      </div>    
    </div>

    <!-- Teléfono -->
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">Teléfono:</label>
        <input type="text" class="form-control" autocomplete="Off" id="inputPhone">
      </div>

      <div class="form-group col-md-6">
        <label for="inputState">Celular:</label>
        <input type="text" class="form-control" autocomplete="Off" id="inputCel">
      </div>    
    </div>

    <!-- email -->
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Correo electrónico: </label>
        <input type="email" class="form-control" id="inputEmail4" autocomplete="Off" placeholder="Email">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Contraseña:</label>
        <input type="password" class="form-control" autocomplete="Off" id="inputPassword4" placeholder="Password">
      </div>
    </div>
    
    <div class="form-group">
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
</div>

<?php
  include 'views/footer.php';
?>