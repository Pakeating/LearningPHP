<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $nombre="Paco";
    echo "Hola $nombre";

    $variable1="Casa";
    $variable2="CASA";
    
    $resultado=strcmp($variable1,$variable2);   //Devuelve 0 si son iguales, 1 si no lo son
    echo "<br> el resultado es ".$resultado."<br>";

    if($resultado){
        echo"No coinciden";
    }else{
        echo"coinciden";
    }
    $resultado=strcasecmp($variable1,$variable2);
    echo "<br> el resultado es ".$resultado."<br>";

    if($resultado){
        echo"No coinciden";
    }else{
        echo"coinciden";
    }
    /*comparadores:
    $var1==$var2        Igual
    $var1===$var2       Identica: Tambien incluye el tipo de la variable
    $var1!=$var2        distinto que
    $var1<>$var2        Verdadera si las variables son diferentes y tambien su tipo es distinto
    $var1<$var2         menor que
    $var1>$var2         mayor que
    $var1<=$var2        menor o igual que
    $var1>=$var2        mayor o igual que
    */

?>
</body>
</html>