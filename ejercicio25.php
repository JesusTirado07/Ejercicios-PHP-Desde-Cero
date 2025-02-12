<?php 

    class persona{

        public $nombre; // Propiedades
        private $edad; // Propiedad Privada
        protected $altura; // Porpiedad protegida

        public function asignarNombre($nuevoNombre){ // Acciones o metodos...

            $this->nombre=$nuevoNombre;

        }

        public function imprimirNombre(){

            echo "Soy: ".$this->nombre;

        }

        public function mostrarEdad(){

            $this->edad=20;
            return $this->edad;

        }

    }

    class trabajador extends persona{

        public $puesto; // Propiedad nueva
        public function presentarComoTrabajador(){

            echo "Hola soy: ".$this->nombre." y soy un ".$this->puesto."<br/>";

        }

    }

    $objetoTrabajador= new trabajador();
    $objetoTrabajador->asignarNombre(" Beto Tirado");
    $objetoTrabajador->puesto="Profesor";
    $objetoTrabajador->presentarComoTrabajador();

    $objetoAlumno= new persona(); // Instancia o creacion de un objeto
    $objetoAlumno->asignarNombre("Tirado"); // Llamando un metodo
    echo $objetoAlumno->nombre; // Imprimir una propiedad

    $objetoAlumno2= new persona();
    $objetoAlumno2->asignarNombre("Beto");
    $objetoAlumno2->imprimirNombre();
    echo $objetoAlumno2->nombre;


?>