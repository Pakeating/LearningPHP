<?php
require "DevuelveProductos.php";
$pais=$_GET["pais"];
$productos=new DevuelveProductos();
$arrayProductos=$productos->get_productos($pais);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    foreach($arrayProductos as $elemento){
        echo"<table><tr><td>";
        echo$elemento['CODARTICULO']."</td><td>";
        echo$elemento['NOMBREARTICULO']."</td><td>";
        echo$elemento['SECCION']."</td><td>";
        echo$elemento['PRECIO']."</td><td>";
        echo$elemento['FECHA']."</td><td>";
        echo$elemento['PAISORIGEN']."</td><td>";
        echo$elemento['CODARTICULO']."</td></tr></table>";
        echo"<br><br>";


    }
    foreach($arrayProductos as $elemento)
    {
        var_dump($elemento);//var_dump muestra los datos de otra manera: indica tipo, linea, etc...

    }
    
    ?>


</body>
</html>