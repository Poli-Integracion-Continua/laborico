<?php
    include 'views/header.php';
    include 'model/profesionales/adminProfesionales.php';

    //Consultamos lista de profesionales
    $profesionales  = getListProfesionales();        
?>


<div class="container">
    <div class="row">        
        <!-- Recorremos la informacion -->
        <?php foreach($profesionales as $value){ ?>
            <div class="col card-profesional">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="resources/images/<?= $value['foto']?>" alt="Card image cap">            
                    <div class="card-body">
                        <h5 class="card-title"><?= $value['nombres']?></h5>
                        <p class="card-text"><?= $value['perfil']?>.</p>
                    </div>            
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><stronge>Profesión</stronge></li>
                        <li class="list-group-item"><?=  $value['profesion'] ?></li>                
                    </ul>
                    <div class="card-body">                
                        <a href="#" class="card-link">Contactar con el profesional</a>
                    </div>                    
                </div>
            </div>
        <?php } ?>        
    </div>
</div>


<?php
    include 'views/footer.php';
?>