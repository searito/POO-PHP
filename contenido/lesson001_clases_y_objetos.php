<?php include_once('../plantillas/header.php');?>

    <h3 class="ui header centered blue">Clases y Objetos</h3>
    
    <div class="container paddingPrincipal">
        <div class="ui grid">
            <div class="eight wide column paddingLeve colorGrisClaro">
<?php
                $persona_atributo = new Persona();
                echo $persona_atributo->nombre;
?>            
            </div>
            <div class="eight wide column paddingLeve colorMenta">
<?php
                $persona_metodo = new Persona();
                $persona_metodo->hablar("Saludos Humano");
?>            
            </div>
        </div>
    </div>
<?php include_once('../plantillas/footer.php');?>