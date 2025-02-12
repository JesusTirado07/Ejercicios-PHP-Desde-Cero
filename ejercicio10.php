<?php 

if($_POST){

    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

   echo "Valor A: ".$valorA. " "."Valor B: ".$valorB."<br/>";

   // != == >= && ||
   if ( ($valorA != $valorB) && ($valorA > $valorB) ) {

    echo "El valor de A es diferente que el valor de B y tambien es mayor";
  
   } else{
    echo "El valor de A no es diferente ni mayor que B";
   }

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

    <form action="ejercicio10.php" method="POST">

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