<?php
$id="";
$contenido="";
$tipo="";


require("Conexion.php");

$sql="SELECT * FROM archivos WHERE id=3";
$base=Conectar::conexion();
$resultado=$base->query($sql);
$registros=$resultado->fetchAll();
foreach($registros as $registro){
    $id=$registro["ID"];
    $contenido=$registro["CONTENIDO"];
    $tipo=$registro["TIPO"];

}
echo"ID: ".$id."<br>";
echo"Tipo: ".$tipo."<br>";
echo"<img src='data:image/webp; base64,".base64_encode($contenido)."'>";
?>
