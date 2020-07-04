<?php
  include 'views/header.php';
  include 'model/profesiones/profesionesAdmin.php';

  //Arreglo de prosiones
  $profesiones = getListProfesiones();
?>

<div class="container">
    <?php foreach($profesiones as $value){ ?>
    <div class="card mb-3 mt-3 shadow-div" style="max-width: 540px;">
    <div class="row no-gutters">
        <div class="col-md-4">
        <img src="resources/images/<?= $value['imagen'] ?>" class="card-img" alt="...">
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title"><?=$value['profesion']?></h5>            
            <a href="#" class="btn btn-primary">Ver Talentos</a>
        </div>
        </div>
    </div>
    </div>
    <?php } ?>
</div>

<?php
  include 'views/footer.php';
?>