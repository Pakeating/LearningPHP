<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function incrementaVariable(){
        static $contador=0;     //al acabar la funcion, se destruye el valor de las variables. Al declararla estatica se conservará y solo se leerá esta linea la primera vez
        $contador++;
        echo $contador. "<br>";
    }
    incrementaVariable();
    incrementaVariable();
    incrementaVariable();
    incrementaVariable();
    incrementaVariable();





    ?>

</body>
</html>