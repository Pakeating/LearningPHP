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
   
    require("ConectionDB.php");

    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);
    if(mysqli_connect_errno()){
        echo "Error conectando a la DB";
        exit();
    }
    mysqli_select_db($conexion, $db_nombre) or die ("DB no encontrada");
    mysqli_set_charset($conexion,"utf8");

    $query="DELETE FROM artículos WHERE codarticulo=$codart;";

    $resultados=mysqli_query($conexion, $query); 
    if($resultados==false){
        echo"error eliminando el artículo";
    }else{
        echo "eliminado correctamente el articulo con codigo $codart <br>";
        echo mysqli_affected_rows($conexion). " registros afectados.";
    }
    mysqli_close($conexion);
     ?>
</body>
</html>

