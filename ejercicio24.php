<?php 

    class persona{

        public $nombre; // Propiedades
        private $edad; // Propiedad Privada
        protected $altura; // Porpiedad protegida

        public function asignarNombre($nuevoNombre){ // Acciones o metodos...

            $this->nombre=$nuevoNombre;

        }

        public function imprimirNombre(){

            echo "Hola soy: ".$this->nombre;

        }

        public function mostrarEdad(){
            
            $this->edad=20;
            return $this->edad;

        }

    }

    $objetoAlumno= new persona(); // Instancia o creacion de un objeto
    $objetoAlumno->asignarNombre("Tirado"); // Llamando un metodo

    $objetoAlumno2= new persona();
    $objetoAlumno2->asignarNombre("Beto");
    $objetoAlumno2->imprimirNombre();

    echo $objetoAlumno2->nombre;

    echo $objetoAlumno->nombre; // Imprimir una propiedad

?>