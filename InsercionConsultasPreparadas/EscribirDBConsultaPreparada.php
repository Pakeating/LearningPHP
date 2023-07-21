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
    $nomart=$_GET["n_art"]; 
    $precio=$_GET["precio"]; 
    $fecha=$_GET["fecha"]; 
    $pog=$_GET["p_orig"]; 

    require("ConectionDB.php");
  

    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);
    if(mysqli_connect_errno()){
        echo "Error conectando a la DB";
        exit();
    }
    mysqli_select_db($conexion, $db_nombre) or die ("DB no encontrada");
    mysqli_set_charset($conexion,"utf8");
    
    $query="INSERT INTO ARTÍCULOS(CODARTICULO,SECCION,NOMBREARTICULO,FECHA,PAISORIGEN,PRECIO) VALUES(?,?,?,?,?,?);";   //se redacta la consulta

    $resultados=mysqli_prepare($conexion, $query);  //se prepara la consulta
    $ok=mysqli_stmt_bind_param($resultados,"isssss",$codart, $seccion,$nomart,$fecha, $pog, $precio);//s string, i integer, d decimal
    $ok=mysqli_stmt_execute($resultados);
    if($ok==false){
        echo"Error al ejecutar la consulta";
    }else{
        
        echo"Agregado nuevo registro a la DB <br>";
        
        mysqli_stmt_close($resultados);
    }


    mysqli_close($conexion);

    ?>
</body>
</html>

