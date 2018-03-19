<?php include_once('../plantillas/header.php'); ?>

    <h3 class="ui header blue centered">Uso De Traits</h3>

    <div class="container paddingPrincipal">
        <div class="ui grid">
            <div class="eight wide column">
                <h4 class="ui header orange centered">Accediendo Al Atributo Del Trait</h4>
<?php
                    $personica = new TraitPersona();
                    $personica->asignarNombre("Sear Clímaco");
                    echo $personica->name;
?>
            </div>
            <div class="eight wide column">
                <h4 class="ui header pink centered">Accediendo Al Método Del Trait</h4>
                <?php $personica->watchName(); ?>
            </div>
        </div>
<?php
        
        
?>        
    </div>
<?php include_once('../plantillas/footer.php'); ?>  