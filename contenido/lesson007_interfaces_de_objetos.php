<?php include_once('../plantillas/header.php'); ?>
    <h3 class="ui header blue centered">Interfaces De Objetos</h3>

    <div class="container paddingPrincipal">    
<?php
        $theCar = new Deportivo();
        $theCar->llenarTanque(100);
        $theCar->turnOn();
        $theCar->marcha(302);
        $theCar->isOn();
?>         
    </div>
<?php include_once('../plantillas/footer.php'); ?>  