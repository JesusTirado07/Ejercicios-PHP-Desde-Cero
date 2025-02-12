<?php

    $frutas=array("f"=>"fresa","p"=>"pera","m"=>"mora");

    print_r($frutas);

    echo "<br/>".$frutas["m"]."<br/>";

    foreach ($frutas as $indice=>&$valor){

        echo $indice."<br/>";

    }

    foreach ($frutas as $indice=>&$valor){

        echo "El valor ".$valor." Tiene el indice: ".$indice."<br/>";

    }

    foreach ($frutas as $indice=>&$valor){

        echo $frutas[$indice]."<br/>";

    }
            
?>