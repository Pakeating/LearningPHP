<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conexion=new mysqli("localhost", "root","francisco","pruebas");
    if($conexion->connect_errno){
        echo "fallo en la conexión <br>".$conexion->connect_errno;
    }
    $conexion->set_charset("utf8");
    $sql="SELECT*FROM ARTÍCULOS";
    $resultado=$conexion->query($sql);
    if($conexion->errno){
        die($conexion->error);
    }
    while($fila=$resultado->fetch_assoc()){
        echo"<table><tr><td>";
        echo$fila['SECCION']."</td><td>";
        echo$fila['NOMBREARTICULO']."</td><td>";
        echo$fila['PAISORIGEN']."</td><tr></table>";
        echo"<br><br>";
    }
    $conexion->close();

    ?>


</body>
</html>