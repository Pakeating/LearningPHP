<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width_50%;
            border:1px dotted #FF0000;
            margin: auto;
        }
    </style>

</head>
<body>
    <?php
    require("ConectionDB.php");
  

    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);//$db_nombre se puede añadir detras y no hacce falta hacer mysqli_select_db luego
    if(mysqli_connect_errno()){
        echo "Error conectando a la DB";
        exit();
    }
    mysqli_select_db($conexion, $db_nombre) or die ("DB no encontrada");
    mysqli_set_charset($conexion,"utf8");

    $query="SELECT * FROM ARTÍCULOS WHERE PAISORIGEN='ESPAÑA'; ";

    $resultados=mysqli_query($conexion, $query);    //devuelve un ResultSet
    /*while($fila=mysqli_fetch_row($resultados)){ //array con el primer resultado del ResultSet. Cada vez que se ejecuta fetch_row cambia al siguiente registro.         
    echo "<table> <tr><td>".$fila[0]. "</td><td> ".$fila[1]."</td><td>".$fila[2]. "</td><td>".$fila[3]."</td><td>".$fila[4]."</td></tr></table>";
    }*/
    while($fila=mysqli_fetch_array($resultados,MYSQLI_ASSOC)){  //al hacer esto usamos un array asociativo en lugar de uno indexado
        echo"<table><tr><td>";
        echo$fila['SECCION']."</td><td>";
        echo$fila['NOMBREARTICULO']."</td><td>";
        echo$fila['PAISORIGEN']."</td><tr></table>";
    }
    mysqli_close($conexion);
    //Tenemos y podemos usar dos caracteres comodín en PHP/SQL:
    // _ sustituye a un solo caracter
    // % sustituye a una cadena

    ?>
</body>
</html>