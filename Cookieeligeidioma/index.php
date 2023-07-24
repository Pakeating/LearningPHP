<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_COOKIE["idiomaSeleccionado"])){
        if($_COOKIE["idiomaSeleccionado"]=="es"){
            header("location:contenidoESP.php");
        }else if($_COOKIE["idiomaSeleccionado"]=="en"){
            header("location:contenidoENG.php");
        }
    }
    ?>
    <table align="center"><th><td colspan="2"><h1>Seleccione idioma:</h1><br></td></th>
    <tr><td><a href="creaCookie.php?idioma=es"><img src="banderas\esp.png" width=600 heigh=400></a></td>
    <td><a href="creaCookie.php?idioma=en"><img src="banderas\ing.png" width=600 heigh=400></a></td>
    </table>
</body>
</html>