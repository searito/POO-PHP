<?php include_once('../plantillas/header.php'); ?>
    <h3 class="ui header blue centered">Modificadores De Acceso</h3>

    <div class="container paddingPrincipal">
<?php
        $acceso = new Modificadores("Sear Clímaco", 26, "#Hol@_Mundo#", "Soltero");
        $acceso->verInfo();
    
        /*
        echo $acceso->nombre;
        echo $acceso->password;
        echo $acceso->estadoCivil;
        $acceso->cambiarPass("#H3ll0_W0rld#");
        */
?>
    </div>
<?php include_once('../plantillas/footer.php'); ?>  