<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php 
   if(isset($_COOKIE["nombreUsuario"])){
    echo"<h1 align='center'>Hola ".$_COOKIE["nombreUsuario"]." </h1>";
    }/*else{
    echo"<h1 align='center'>Hola".$_POST["login"]." </h1>";
    }*/
    ?>
    <h2 align="center">Contenido Web</h2>
    <img src="img.png" >


</body>
</html>