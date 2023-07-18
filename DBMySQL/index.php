<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $db_host="localhost";
    $db_nombre="concesionario";
    $db_usuario="root";
    $db_contra="francisco";

    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

    $query="SELECT * FROM PROPIETARIOS";
    $resultados=mysqli_query($conexion, $query);    //devuelve un ResultSet
    $fila=mysqli_fetch_row($resultados);             //array con el primer resultado del ResultSet
    echo $fila[0]. ", ".$fila[1].", ".$fila[2]."<br>";


    ?>
</body>
</html>