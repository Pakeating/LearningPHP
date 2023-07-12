<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $var1=1;
    while($var1<6){
        echo "Estamos ejecutando el codigo del bucle while <br>";
        $var1++;
    }
    echo "Hemos salido del bucle <br>";
    $var1=0;
    do{
        echo"Estamos ejecutando el codigo del bucle dowhile <br>";
        $var1++;
    }while($var1<6);
    echo "Hemos salido del bucle <br>";
    for($i=0;$i<6;$i++){
        echo "Estamos ejecutando el codigo del bucle for, estamos en i= $i <br>";
    }
    echo "Hemos salido del bucle <br>";     //si usamos continue se salta lo que queda de bucle y sigue con la siguiente vuelta.

    ?>
</body>
</html>