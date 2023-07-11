<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        print "<p> Hola mundos </p>";
        $variable="Paco";   //tipado dinamico, no hace falta indicar el tipo de dato
        $edad=30;
        print $variable.$edad;  //se concatena con . 
        print "</br> la edad es $edad"; //puede meterse una variable dentro de una cadena con comilla doble, no con simple
        echo $variable, $edad;  //echo imprime pero nos permite sacar los valores de varias variables. Se usa más echo. 

        echo"este es el primer mensaje <br>";
        function dameDatos(){
            echo "mensaje dentro de la funcion <br>";
        }
        
        
        echo "Este es el segundo mensaje <br>";
        dameDatos();
        
        function nombreGlobal(){
            global $name;       //variables globales se declaran dentro de la funcion, si la declaro fuera no podré usarla dentro de la funcion ni modificfarla desde dentro.
            $name="Paquito"; 
        }
        





    ?>
</body>
</html>
