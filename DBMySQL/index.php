<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require("ConectionDB.php");
    $db_host="localhost";
    $db_nombre="pruebas";
    $db_usuario="root";
    $db_contra="francisco";

    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);//$db_nombre se puede añadir detras y no hacce falta hacer mysqli_select_db luego
    if(mysqli_connect_errno()){
        echo "Error conectando a la DB";
        exit();
    }
    mysqli_select_db($conexion, $db_nombre);
    mysqli_set_charset($conexion,"utf8");

    $query="SELECT * FROM ARTÍCULOS";

    $resultados=mysqli_query($conexion, $query);    //devuelve un ResultSet
    while($fila=mysqli_fetch_row($resultados)){ //array con el primer resultado del ResultSet. Cada vez que se ejecuta fetch_row cambia al siguiente registro.         
    echo $fila[0]. ", ".$fila[1].", ".$fila[2]. ", ".$fila[3].", ".$fila[4]."<br>";
    }
    mysqli_close($conexion);


    ?>
</body>
</html>