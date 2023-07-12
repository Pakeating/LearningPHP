<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Coche{
        var $ruedas;
        var $color;
        var $motor;
        function Coche(){   //constructor
            $this->ruedas=4;
            $this->color="rojo";
            $this->motor=1600;
        }
        function arrancar(){
            echo"estoy arrancando <br>";
        }
        function girar(){
            echo"estoy girando <br>";
        }
        function frenar(){
            echo "estoy frenando <br>";
        }
    }

    $renault=new Coche();
    $mazda=new Coche();
    $mazda->arrancar();
    $mazda->girar();
    $renault->frenar();
    echo $mazda->ruedas;
    ?>
</body>
</html>