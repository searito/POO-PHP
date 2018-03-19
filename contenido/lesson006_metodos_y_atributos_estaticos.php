<?php include_once('../plantillas/header.php'); ?>
    <h3 class="ui header blue centered">Métodos y Atributos Estáticos</h3>

    <div class="container paddingPrincipal">
<?php
        $miPagina = new Pagina();
        $miPagina->bienvenida();
        Pagina::wellcome();
?>        
    </div>
<?php include_once('../plantillas/footer.php'); ?>  