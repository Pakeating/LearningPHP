<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $miconexion=mysqli_connect("localhost","root","francisco","blogphp");
        if(!$miconexion){
            echo "Error conectando a la base de datos: "- mysqli_error();
            exit();
        }
        if($_FILES["imagen"]["error"]){
            switch($_FILES["imagen"]["error"]){
                case 1: //error exceso de tamaño de archivo en php.ini
                    echo"Tamaño archivo excesivo para el servidor";
                    break;
                case 2: //error tamaño archivo marcado desde formulario
                    echo"Tamaño de archivo superior al permitido (2Mb)";
                    break;
                case 3: //archivo subido parcialmente
                    echo"El envio del archivo se interrumpio";
                    break;
                case 4: //No hay fichero
                    echo"No se ha enviado ningun fichero";
                    break;
            }
        }else{
            echo"Entrada subida correctamente<br>";
            if((isset($_FILES["imagen"]["name"])&&($_FILES["imagen"]["error"]==UPLOAD_ERR_OK))){
             $destinoRuta;   

            }
        }

        

    ?>
</body>
</html>