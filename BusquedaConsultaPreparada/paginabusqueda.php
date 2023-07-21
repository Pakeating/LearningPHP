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
  

    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);
    if(mysqli_connect_errno()){
        echo "Error conectando a la DB";
        exit();
    }
    mysqli_select_db($conexion, $db_nombre) or die ("DB no encontrada");
    mysqli_set_charset($conexion,"utf8");
    $busqueda=$_GET["buscar"]; 

    $query="SELECT CODARTICULO, NOMBREARTICULO, PAISORIGEN FROM ARTÍCULOS WHERE PAISORIGEN= ?";   //se redacta la consulta

    $resultados=mysqli_prepare($conexion, $query);  //se prepara la consulta
    $ok=mysqli_stmt_bind_param($resultados,"s",$busqueda);//se comprueba la consulta. "s" es por ser string
    $ok=mysqli_stmt_execute($resultados);
    if($ok==false){
        echo"Error al ejecutar la consulta";
    }else{
        $ok=mysqli_stmt_bind_result($resultados,$codart,$nomart, $pais);
        echo"Articulso encontrados: <br><br>";
        while(mysqli_stmt_fetch($resultados)){
            echo $codart." ".$nomart." ".$pais."<br>";
        }
        mysqli_stmt_close($resultados);
    }


    mysqli_close($conexion);

    ?>
</body>
</html>

