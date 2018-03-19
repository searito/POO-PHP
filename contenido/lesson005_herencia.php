<?php include_once('../plantillas/header.php'); ?>
    <h3 class="ui header blue centered">Herencia</h3>

    <div class="container paddingPrincipal">
        <div class="ui grid">
            <div class="eight wide column paddingLeve">
                <h4 class="ui header centered green">Clase Vehículo</h4>
<?php
                $vehiculo = new Vehiculo();
                $vehiculo->estado();
                $vehiculo->encender();
                $vehiculo->estado();
?>                
            </div>

            <div class="eight wide column paddingLeve">
                <h4 class="ui header centered olive">Clase Moto</h4>
<?php
                $miMoto = new Moto();
                $miMoto->estado();
?>                
            </div>
        </div>        
    </div>
<?php include_once('../plantillas/footer.php'); ?>  