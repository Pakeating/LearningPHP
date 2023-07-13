<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
    $semana[]="Lunes";
    $semana[]="Martes";
    $semana[]="Miercoles";
    echo $semana[1]."<br>";
    $semana2=array("Lunes","Martes","Miercoles");
    echo$semana2[1]."<br>";
    $arrayAsociativo=array("Nombre"=>"Juan","Apellido"=>"Gómez","Edad"=>"30");
    echo$arrayAsociativo["Apellido"]."<br>";
    ?>
</body>
</html>