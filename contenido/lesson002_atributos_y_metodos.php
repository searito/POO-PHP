<?php include_once('../plantillas/header.php'); ?>
    <h3 class="ui header blue centered">Atributos y Métodos</h3>

    <div class="container paddingPrincipal">
        <div class="ui relaxed divided list">
<?php
            $alumno = new Alumno();
            $alumno->guardar("Sear", "Clímaco");
            $alumno->guardar("Rosa", "Martínez");
            $alumno->guardar("Vilma", "Clímaco");
            $alumno->guardar("Raquel", "Arana");
            
            $alumno->mostrar();
?>        
        </div>
    </div>
<?php include_once('../plantillas/footer.php'); ?>