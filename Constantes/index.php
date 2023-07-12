<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        define("AUTOR", "Paco");        //por convenio se debe poner en mayus, aunque puede ponerse en true el tercer parámetro, con lo que dejaria de ser casesensitive
        echo AUTOR;
        echo "<br>El autor es : " . AUTOR. "<br>";
        //Existen varibles predefinidas, como __LINE__, __FILE__, __DIR__ y otras.
        echo "El fichero ". __FILE__." de este programa está en: ". __DIR__
    ?>
</body>
</html>