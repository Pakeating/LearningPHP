<?php
//se reciben los datos de la Archivo+
$nombreArchivo=$_FILES["Archivo"]["name"];
$tipoArchivo=$_FILES["Archivo"]["type"];
$tamannoArchivo=$_FILES["Archivo"]["size"];
echo $_FILES["Archivo"]["type"];
echo $_FILES["Archivo"]["size"];


if($tamannoArchivo<=10000000){
        $carpetaDestino=$_SERVER["DOCUMENT_ROOT"]."/uploads/";
        move_uploaded_file($_FILES["Archivo"]["tmp_name"],$carpetaDestino.$nombreArchivo);
   
}else{
    echo"<br>Tamaño excesivo, solo se admiten Archivoes menores a 1Mb";
}

require ("Conexion.php");
$base=Conectar::conexion();

$archivoObjetivo=fopen($carpetaDestino.$nombreArchivo, "r");
$contenido=fread($archivoObjetivo,$tamannoArchivo);
fclose($archivoObjetivo);



$sql="INSERT INTO archivo (nombre, tipo, contenido) VALUES('$nombreArchivo','$tipoArchivo','$tipoArchivo')";
$resultado=$base->query($sql);

if($resultado->rowCount()>0){
    echo"Registro Insertado";
}else{
    echo"Nose ha podido insertar el registro";
}
?>