<?php

    // Arreglos
    $frutas=array("fresa","pera","mora");

    echo $frutas[2]."<br/>";

    print_r($frutas); // Es parecido usando el dp = die(var_dump()); para ver como y en que posicion viene el dato/datos

    for($indice=0; $indice<3; $indice++){
        
        echo "<br/>".$frutas[$indice];

    }


?>