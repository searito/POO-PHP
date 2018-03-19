<?php include_once('../plantillas/header.php'); ?>
    <h3 class="ui header blue centered">Constructores y Destructores</h3>

    <div class="container paddingPrincipal">
        <div class="ui grid">
            <div class="ten wide column">
                <div class="ui inverted segment">
<?php
                    $loteria = new Loteria(10, 6);
                    $loteria->sortear();
?>   
                </div>
            </div>
        </div>     
    </div>
<?php include_once('../plantillas/footer.php'); ?>  