<?php
    include 'views/header.php';
    include 'model/profesionales/adminProfesionales.php';

    //Consultamos lista de profesionales
    $profesionales  = getListProfesionales();        
?>


<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">PROFESIONALES</h5>
        <div class="row">
            <?php foreach($profesionales as $value){ ?>
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="<?= $value['foto'] ?>" alt="card image"></p>
                                    <h4 class="card-title"><?= $value['nombres'] ?></h4>
                                    <p class="card-text"><?= $value['profesion'] ?></p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title"><?= $value['nombres'] ?></h4>
                                    <p class="card-text"><?= $value['perfil'] ?>.</p>
                                    <button class="btn btn-secondary">Contactar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->     
            <?php } ?>       
        </div>
    </div>
</section>
<!-- Team -->


<?php
    include 'views/footer.php';
?>