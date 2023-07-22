<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    if(!isset($_SESSION["usuario"])){
        header("location:index.html");

    }
    ?>
    <h1>Bienvenidos Usarios</h1>
    <?php
    echo"Hola: ".$_SESSION["usuario"]."!";
    ?>
    <br>
    <p>Pagina solo para Usuarios registrados</p>

</body>
</html>