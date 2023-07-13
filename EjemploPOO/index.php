<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("Concesionario.php");
    $compraAntonio=new Compra_vehiculo("compacto");
    $compraAntonio->climatizador();
    $compraAntonio->tapiceria("blanco");
    
    $compraAna=new Compra_vehiculo("compacto");
    $compraAna->tapiceria("rojo");
    $compraAna->climatizador();
    
    Compra_vehiculo::subvencionar();
    echo $compraAntonio->precio_final()."<br>";
    echo $compraAna->precio_final()."<br>";
    ?>
</body>
</html> 