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
        <label for="inputJob">Profesión:</label>
        <select id="inputJob" class="form-control">
          <option value="0">...</option>
          <option value="1">Profesión 1</option>
          <option value="2">Profesión 2</option>
          <option value="3">Profesión 3</option>
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

    <!-- Ciudad -->
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputTypeDocument">Tipo de documento:</label>
        <select id="inputTypeDocument" class="form-control">
          <option value="0">...</option>
          <option value="1">Tarjeta de identidad</option>
          <option value="2">Cédula de ciudadanía</option>
          <option value="3">Cédula de extranjería</option>
        </select>
      </div> 
      <div class="form-group col-md-6">
        <label for="inputDocument">Número de documento:</label>
        <input type="text" class="form-control" autocomplete="Off" id="inputDocument">
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