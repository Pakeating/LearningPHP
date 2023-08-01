<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Blog</h2>
    <hr/>
    <h3><a href="Formulario.php">Nueva entrada</a></h3>
    <hr/>
<?php
    $conexion=mysqli_connect("localhost","root","francisco","blogphp");
    if(!$conexion){
        echo "Error conectando a la base de datos: ". mysqli_error();
        exit();
    }
    $consulta="SELECT * FROM  contenido ORDER BY fecha DESC";
    if($resultado=mysqli_query($conexion,$consulta)){
        while($registro=mysqli_fetch_assoc($resultado)){
            echo"<h3>".$registro["titulo"]."</h3>";
            echo"<h4>".$registro["fecha"]."</h4>";
            echo "<div style='width:400px'>". $registro["comentario"]."</div><br><br>";
            if($registro["imagen"]!=""){
                echo "<img src='imagenes/".$registro["imagen"]."'width='300px'/>";
            }
            echo"<hr/>";
        }
    }
?>
</body>
</html>