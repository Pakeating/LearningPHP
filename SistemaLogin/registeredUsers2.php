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
    echo"Usuario: ".$_SESSION["usuario"];
    ?>

    <br>
    <p>Pagina solo para Usuarios registrados</p>
    <table>
        <tr><td tablespan="2"><p>Otras páginas de usuarios</p></td></tr>
        <tr><td> <a href="registeredUsers1.php">Pagina 1</a></td><td><a href="registeredUsers3.php">Pagina 3</a></td></tr>
    </table>
    <br>
<a href="cerrarSesion.php">CERRAR SESION<a>

</body>
</html>