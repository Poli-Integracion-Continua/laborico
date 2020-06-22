<?php
  include 'views/header.php';
?>

<?php 
    for ($i=1; $i < 10; $i++) { 
?>
    <div class="container">
        <br><br>
        <div class="container">
            <h1 class="display-4">Profesion <?php echo $i;?></h1>
            <p class="lead"> traer de la base de datos.</p>
            <hr class="my-4">
        </div>
    </div>
<?php
    }
  include 'views/footer.php';
?>