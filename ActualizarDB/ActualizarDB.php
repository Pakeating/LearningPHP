<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $codart=$_GET["codart"];
    $seccion=$_GET["seccion"];
    $nomart=$_GET["nomart"];
    $precio=$_GET["precio"];
    $fecha=$_GET["fecha"];
    $origen=$_GET["paisog"];
    require("ConectionDB.php");

    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);
    if(mysqli_connect_errno()){
        echo "Error conectando a la DB";
        exit();
    }
    mysqli_select_db($conexion, $db_nombre) or die ("DB no encontrada");
    mysqli_set_charset($conexion,"utf8");

    $query="UPDATE ARTÍCULOS SET CODARTICULO='$codart', SECCION='$seccion', NOMBREARTICULO='$nomart',FECHA='$fecha',PAISORIGEN='$origen', PRECIO='$precio' WHERE CODARTICULO='$codart';";

    $resultados=mysqli_query($conexion, $query); 
    if($resultados==false){
        echo"error en la insercion";
    }else{
        echo "actualizado correctamente";
    }
    mysqli_close($conexion);
     ?>
</body>
</html>

