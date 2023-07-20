<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $busqueda=$_GET["buscar"];


    require("ConectionDB.php");
  

    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);//$db_nombre se puede añadir detras y no hacce falta hacer mysqli_select_db luego
    if(mysqli_connect_errno()){
        echo "Error conectando a la DB";
        exit();
    }
    mysqli_select_db($conexion, $db_nombre) or die ("DB no encontrada");
    mysqli_set_charset($conexion,"utf8");

    $query="SELECT * FROM ARTÍCULOS WHERE NOMBREARTICULO LIKE'%$busqueda%'; ";

    $resultados=mysqli_query($conexion, $query); 
    while($fila=mysqli_fetch_array($resultados,MYSQLI_ASSOC)){  
    
        echo"<form action='ActualizarDB.php' method='get'>";
        echo"<input type='text'name='codart' value='".$fila['CODARTICULO']."'<br>"; //ya que es campo clave no debería poder modificarse, para otras ocasiones
        echo"<input type='text'name='seccion' value='".$fila['SECCION']."'<br>";
        echo"<input type='text'name='nomart' value='".$fila['NOMBREARTICULO']."'<br>";
        echo"<input type='text'name='fecha' value='".$fila['FECHA']."'<br>";
        echo"<input type='text'name='paisog' value='".$fila['PAISORIGEN']."'<br>";
        echo"<input type='text'name='precio' value='".$fila['PRECIO']."'<br>";
        echo"<input type='submit' name='enviando' value='Actualizar'>";
        echo"</form>";
    
    }
    mysqli_close($conexion);

    ?>
</body>
</html>

