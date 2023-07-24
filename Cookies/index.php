<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    setcookie("prueba", "informacion de la cookie",time()+30,"");//si no damos el tiempo de vida, 
    //por defecto se borra al cerrar el navegador. time()+30 son 30 segundos, debe ponerse el tiempo siempre en segundos
    //si ponemos time()-1 borrará la cookie
    //el siguiente parametro es la ruta donde actua. Solo podrá leerse desde el directorio y los subdirectorios dentro de el



    ?>
</body>
</html>