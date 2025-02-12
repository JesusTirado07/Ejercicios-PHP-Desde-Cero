<?php 

if($_POST){

    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    // Suma
    $suma=$valorA+$valorB;
    // Resta
    $resta=$valorA-$valorB;
    // Divicion
    $divicion=$valorA/$valorB;
    // Multiplicacion
    $multiplicacion=$valorA*$valorB;

    // Resultados
    echo "Valor A: ".$valorA. " "."Valor B: ".$valorB."<br/>";
    echo "La suma es: ".$suma."<br/>";
    echo "La resta es: ".$resta."<br/>";
    echo "La divicion es: ".$divicion."<br/>";
    echo "La multiplicacion es: ".$multiplicacion."<br/>";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones aritmeticos</title>
</head>
<body>

    <form action="ejercicio8.php" method="POST">

    valor A:
    <input type="text" name="valorA" id="">
    <br/>

    valor B:
    <input type="text" name="valorB" id="">
    <br/>

    <input type="submit" value="Calcular">

    </form>
    
</body>
</html>