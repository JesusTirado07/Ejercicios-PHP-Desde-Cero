<?php

    // $apellido="" (Esto ("") permite poner valores en null)
    function imprimirNombre($nombre, $apellido=""){
        
        // Rutinas (Instrucciones)
        echo "Hola ".$nombre." ".$apellido."<br/>";

    }

    imprimirNombre("Oscar","Aguso");
    imprimirNombre("Pedro","Perez");
    imprimirNombre("Maria","Garcia");

?>