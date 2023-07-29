<?php
//se reciben los datos de la imagen+
$nombreImagen=$_FILES["imagen"]["name"];
$tipoImagen=$_FILES["imagen"]["type"];
$tamannoImagen=$_FILES["imagen"]["size"];
echo $_FILES["imagen"]["type"];
echo $_FILES["imagen"]["size"];


if($tamannoImagen<=1000000){

    if($tipoImagen=="image/jpeg"||$tipoImagen=="image/jpg"||$tipoImagen=="image/png"||$tipoImagen=="image/webp"){
        //ruta de la carpeta destino del servidor. Importante: el directorio debe exitir
        $carpetaDestino=$_SERVER["DOCUMENT_ROOT"]."/uploads/";

        //Se mueve la imagen del diretorio temporal al escogido
        move_uploaded_file($_FILES["imagen"]["tmp_name"],$carpetaDestino.$nombreImagen);
    }else{
        echo" <br>Formato incorrecto";
    }
}else{
    echo"<br>Tamaño excesivo, solo se admiten imagenes menores a 1Mb";
}

?>