<?php 
    #use Models\Persona;

    include_once('../plantillas/header.php'); 
    /*require_once('../funciones/Models/Persona.php');
    require_once('../funciones/Controllers/PersonaController.php');*/

    spl_autoload_register(function($clase){
        $ruta = '../funciones/'.str_replace("\\", "/", $clase).'.php';
        
        if (is_readable($ruta)) {
            require_once $ruta;
        }else{
            echo "<h2 class='ui header red centered'>El Archivo No Existe</h2>";
        }
    });
?>

    <h3 class="ui header blue centered">Uso De Namespaces</h3>

    <div class="container paddingPrincipal">
        <div class="ui grid">
            <div class="eight wide column paddingLeve colorMenta"><?php Models\Persona::Hola(); ?></div> 
            <div class="eight wide column paddingLeve colorGrisClaro"><?php Controllers\PersonasController::Hola(); ?></div> 
        </div>
    </div>
<?php include_once('../plantillas/footer.php'); ?>  