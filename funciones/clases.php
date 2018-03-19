<?php

    class Persona
    {
        //______    ATRIBUTOS
        public $nombre = "Searito";

        //______    METODOS
        public function hablar($mensaje){
            echo $mensaje;
        }
    }


    class Alumno
    {
        public $nombre = array();
        public $apellido = array();

        public function guardar($nombre, $apellido){
            $this->nombre[] = $nombre;
            $this->apellido[] = $apellido;
        }

        
        public function mostrar(){
            for ($i = 0; $i < count($this->nombre); $i++) { 
                self::formato($this->nombre[$i], $this->apellido[$i]);
            }
        }


        public function formato($nombre, $apellido){
            //echo "<h5 class='ui header green'>Nombre: ".$nombre." Apellido: ".$apellido. "</h5>";
            echo "<div class='item'>
                    <i class='large github middle aligned icon'></i>
                    <div class='content'>
                        <a class='header'>".$nombre."</a>
                        <div class='description'>".$apellido."</div>
                    </div>
                  </div>";
        }
    }


    class Loteria
    {
        public $numero;
        public $intentos;
        public $resultado = false;


        public function __construct($numero, $intentos){
            $this->numero = $numero;
            $this->intentos = $intentos;
        }

        public function sortear(){
            $minimo = $this->numero / 2;
            $maximo = $this->numero * 2;

            for ($i = 0; $i < $this->intentos; $i++) {
                $int = rand($minimo, $maximo);
                self::intentos($int);
            }
        }

        public function intentos($int){
            if ($int == $this->numero) {
                echo "<h4 class='ui green inverted header'>".$int." == ".$this->numero."</h4>";
                $this->resultado = true;
            }else{
                echo "<h4 class='ui red inverted header'>" . $int . " != " . $this->numero . "</h4>";
            }
        }

        public function __destruct(){
            if ($this->resultado) {
                echo "<h3 class='ui header centered green'>Felicidades, Has Acertado En ".$this->intentos. " Intentos</h3>";
            }else{
                echo "<h3 class='ui header centered red'>Que Lástima, Has Perdido En " . $this->intentos . " Intentos</h3>";
            }
        }
    }


    class Modificadores
    {
        public $nombre;
        public $edad;
        private $password;
        protected $estadoCivil;

        public function __construct($nombre, $edad, $password, $estadoCivil){
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->password = $password;
            $this->estadoCivil = $estadoCivil;
        }

        public function verInfo(){
            echo "Nombre: ".$this->nombre."<br>";
            echo "Edad: ".$this->edad."<br>";
            self::cambiarPass("#H0l@_Mund0#");
            echo "Contraseña: ".$this->password."<br>";
            echo "Estado Civil: ".$this->estadoCivil."<br>";
        }

        private function cambiarPass($password){
            $this->password = $password;
        }
    }


    class Vehiculo
    {
        public $motor = false;
        public $marca;
        public $color;

        public function estado(){
            if($this->motor){
                echo "El Motor Está Encendido...<br>";
            }else{
                echo "El Motor Está Apagado...<br>";
            }
        }


        public function encender(){
            if ($this->motor) {
                echo "Cuidado El Motor Ya Está Encendido <br>";
            }else{
                echo "El Motor Ahora Está Encendiendo... <br>";
                $this->motor = true;
            }
        }
    }


    class Moto extends Vehiculo
    {
        
    }


    class Pagina
    {
        public $nombre = "Searitos On Github...";
        public static $url = "http://www.github.com/searito";

        public function bienvenida(){
            echo "<div class='ui inverted segment'>
                    <h4 class='ui header centered purple inverted'>Bienvenidos A ".$this->nombre." La Página Es ". self::$url . "</h4>
                  </div>";
        }

        public static function wellcome(){
            echo "<div class='ui inverted segment'>
                    <h4 class='ui header centered pink inverted'>Bienvenid@s A ". self::$url."</h4>
                  </div>";
        }
    }


    interface Auto{
        public function turnOn();
        public function turnOff();
        
    }

    interface Gasolina extends Auto{
        public function vaciarTanque();
        public function llenarTanque($cant);
    }

    class Deportivo implements Gasolina
    {
        private $estado = false;
        private $tanque = 0;


        public function isOn(){
            if ($this->estado){
                print "El Auto Está Encendido y Tiene ". number_format($this->tanque, 2, '.', '') ." Litros De Gasolina En El Tanque<br>";
            }else{
                print "El Auto Está Apagado <br>";
            }
        }

        public function turnOn(){
            if ($this->estado){
                print "No Puedes Encender 2 Veces Consecutivas El Auto <br>";
            }else{
                if ($this->tanque <= 0) {
                    print "No Puedes Encender El Auto Con Tanque Vacio <br>";
                }else{
                    print "Auto Encendido <br>";
                    $this->estado = true;
                }
                
            }
        }

        public function turnOff(){
            if ($this->estado) {
                print "Auto Apagado... <br>";
                $this->estado = false;
            } else {
                print "El Auto Ya Está Apagado...<br>";
                $this->estado = true;
            }
        }

        public function vaciarTanque(){
            $this->tanque = 0;
        }

        public function llenarTanque($cant){
            $this->tanque = $cant;
        }

        public function marcha($km){
            if ($this->estado) {
                $reducir = $km / 3;
                $this->tanque = $this->tanque - $reducir;

                if ($this->tanque <= 0) {
                    $this->estado = false;
                }
            }else {
                print "El Auto Está Apagado y No Se Puede Usar <br>";
            }
        }
    }


    abstract class Molde
    {
        abstract public function ingresarNombre($nombre);
        abstract public function obtenerNombre();
    }

    class HeredarMolde extends Molde
    {
        private $message = "Hola Personas Del Universo";
        private $nombre;

        public function ingresarNombre($nombre, $usuario = " - Parámetro Opcional -"){
            $this->nombre = $nombre." ".$usuario;
        }

        public function obtenerNombre(){
            echo $this->nombre;
        }

        public function showing(){
            echo $this->message;
        }
    }


    class PersonaAutoload
    {
        public function greeting($mensaje){
            echo "La Persona Está Diciendo: ".$mensaje;
        }
    }


    trait PersonaTrait
    {
        public $name;

        public function watchName(){
            echo $this->name;
        }

        abstract function asignarNombre($nombre);
    }


    trait TrabajadorTrait
    {
        protected function saludoEmpleado(){
            echo "Mi Nombre Es: ";
        }
    }


    class TraitPersona{
        use PersonaTrait, TrabajadorTrait;

        public function asignarNombre($nombre){
            #$this->name = $nombre;
            $this->name = self::saludoEmpleado() . $nombre;
        }
    }