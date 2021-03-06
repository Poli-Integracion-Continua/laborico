<?php
  include 'views/header.php';
?>

<section class="banner">
    <h1>Bienvenido a Laborico!</h1>
    <p>Laborico es una iniciativa que nació a raíz del desempleo que existe en Colombia, buscando conectar gente talentosa con personas que requieren ese talento.</p>
    <!-- <a class="btn-bgstroke">Empezar</a> -->
</section>
<section>
  <div class="container">
  <div class="card">
  <div class="card-body">
    <h4 class="card-title">Encuentra lo que buscas</h4>
    <p class="card-text">Ya sea que estés buscando empleo o buscando personas talentosas, estás en el lugar correcto.</p>
    <p class="card-text"><small class="text-muted">Solo se va rápido pero acompañado se llega más lejos.</small></p>
  </div>
  <img src="resources/images/card-extend.jpg" class="card-img-top" alt="card-extend">
</div>
  </div>
</section>

<section>
 <div class="container">
 <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Buscas Empleo</h5>
        <p class="card-text">Regístrate para dar a conocerte y que las empresas o personas que te necesiten te contacten.</p>
        <a href="registroProfesional.php" class="btn btn-primary mt-2">Registrarme</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Buscas Personas Talentosas</h5>
        <p class="card-text">Regístrate para poder contactar a las personas con los talentos que necesitas.</p>
        <a href="registroUsuario.php" class="btn btn-primary mt-2">Registrarme</a>
      </div>
    </div>
  </div>
</div>
 </div>
</section>
  
<?php
  include 'views/footer.php';
?>