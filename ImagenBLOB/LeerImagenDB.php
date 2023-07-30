<?php
require("Conexion.php");

$sql="SELECT FOTO FROM ARTÍCULOS WHERE CODARTICULO=1";
$base=Conectar::conexion();
$resultado=$base->query($sql);
$registros=$resultado->fetchAll();
foreach($registros as $registro){
    $rutaIMG=$registro["FOTO"];

}


?>
<div>
<img src="/uploads/<?php echo $rutaIMG;?>" alt="Imagen"/>

</div>