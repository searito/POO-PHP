<?php include_once('../plantillas/header.php'); ?>
    <h3 class="ui header blue centered">Clases y Métodos Abstractos</h3>

    <div class="container paddingPrincipal">    
<?php
        $instancia = new HeredarMolde();
        $instancia->ingresarNombre("Searito");
        $instancia->obtenerNombre();
?>         
    </div>
<?php include_once('../plantillas/footer.php'); ?>  