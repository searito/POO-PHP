<?php 
    include_once('../plantillas/header.php');
    
    function autoload($clase){
        include "../funciones/" . $clase . ".php";
    }

    spl_autoload_register('autoload');
?>
    <h3 class="ui header blue centered">Autoload</h3>

    <div class="container paddingPrincipal">
        <div class="ui grid">
            <div class="eight wide column paddingLeve">
                <?php PersonaAutoload::greeting("Whats Up Bitches"); ?>
            </div>
            <div class="eight wide column paddingLeve">
                <?php Autoload::showingMessage("Howdy Beatches"); ?>
            </div>
        </div>   
    </div>
<?php include_once('../plantillas/footer.php'); ?>  