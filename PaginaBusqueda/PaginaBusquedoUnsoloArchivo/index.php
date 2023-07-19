<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    function ejecutarConsulta($labusqueda){


    require("ConectionDB.php");
  
    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);//$db_nombre se puede añadir detras y no hacce falta hacer mysqli_select_db luego
    if(mysqli_connect_errno()){
        echo "Error conectando a la DB";
        exit();
    }
    mysqli_select_db($conexion, $db_nombre) or die ("DB no encontrada");
    mysqli_set_charset($conexion,"utf8");

    $query="SELECT * FROM ARTÍCULOS WHERE NOMBREARTICULO LIKE'%$labusqueda%'; ";

    $resultados=mysqli_query($conexion, $query);    //devuelve un ResultSet

    while($fila=mysqli_fetch_array($resultados,MYSQLI_ASSOC)){  //al hacer esto usamos un array asociativo en lugar de uno indexado
        echo"<table><tr><td>";
        echo$fila['SECCION']."</td><td>";
        echo$fila['NOMBREARTICULO']."</td><td>";
        echo$fila['PAISORIGEN']."</td><tr></table>";
    }
    mysqli_close($conexion);
    }
    ?>
</head>
<body>
    <?php
    $mibusqueda=$_GET["buscar"];
    $mipagina=$_SERVER["PHP_SELF"];
    if($mibusqueda!=NULL){
        ejecutarConsulta($mibusqueda);
    }else{
        echo("<form action='".$mipagina."' method='get'>
        <label>Buscar:<input type='text' name='buscar'></label>
        <input type='submit' name='enviando' value='Dale!'>
        </form>");
    }

    ?>

</body>
</html>