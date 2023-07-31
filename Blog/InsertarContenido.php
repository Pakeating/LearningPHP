<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conexion=mysqli_connect("localhost","root","francisco","blogphp");
        if(!$conexion){
            echo "Error conectando a la base de datos: "- mysqli_error();
            exit();
        }
        if($_FILES["imagen"]["error"]){
            switch($_FILES["imagen"]["error"]){
                case 1: //error exceso de tamaño de archivo en php.ini
                    echo"Tamaño archivo excesivo para el servidor";
                    break;
                case 2: //error tamaño archivo marcado desde formulario
                    echo"Tamaño de archivo superior al pertido (2Mb)";
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
                $destinoRuta="imagenes/";   
                move_uploaded_file($_FILES["imagen"]["tmp_name"],$destinoRuta.$_FILES["imagen"]["name"]);
                echo "El archivo ". $_FILES["imagen"]["name"]." se ha copiado en el directorio de imágenes";
            }else{
                echo "El archivo no se ha podido copiar en el directorio de imágenes";
            }
        }
        $titulo=$_POST["campo_titulo"];
        $fecha=date("Y-m-d H:i:s");
        $comentario=$_POST["area_comentarios"];
        $imagen=$_FILES["imagen"]["name"];

        
        $consulta="INSERT INTO contenido(titulo, fecha, comentario, imagen) VALUES('".$titulo."','".$fecha."','".$comentario."','".$imagen."');";
        $resultado=mysqli_query($conexion,$consulta);
        mysqli_close($conexion);
        echo"<br> Se ha agregado el comentario con exito. <br><br>";
    ?>
</body>
</html>