<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $seccion=$_GET["seccion"];
    $nomart=$_GET["n_art"];
    $precio=$_GET["precio"];
    $fecha=$_GET["fecha"];
    $origen=$_GET["p_orig"];
    require("ConectionDB.php");

    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);//$db_nombre se puede añadir detras y no hacce falta hacer mysqli_select_db luego
    if(mysqli_connect_errno()){
        echo "Error conectando a la DB";
        exit();
    }
    mysqli_select_db($conexion, $db_nombre) or die ("DB no encontrada");
    mysqli_set_charset($conexion,"utf8");

    $query="INSERT INTO artículos (SECCION, NOMBREARTICULO, PRECIO, FECHA, PAISORIGEN) VALUES('$seccion','$nomart','$precio','$fecha','$origen');";

    $resultados=mysqli_query($conexion, $query); 
    if($resultados==false){
        echo"error en la insercion";
    }else{
        echo "insertado correctamente";
    }
    mysqli_close($conexion);
     ?>
</body>
</html>

