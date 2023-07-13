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
        private $motor;             //Modificador: Por defecto es public. Puede ponerse tambien private o protected, segun necesidad.
        function __construct() {   //CONSTRUCTOR DEBE SER ASI, SE CAMBIO EN ALGUN MOMENTO. Antes era como en java.
            $this->ruedas=4;
            $this->color="rojo";
            $this->motor=1600;
        }                           //La herencia se expresa mediante ClaseHija extend ClasePadre
        function arrancar(){        //Mediante parent:: podemos acceder a los atributos y metodos de la clase padre.
            echo"estoy arrancando <br>";
        }
        function girar(){
            echo"estoy girando <br>";
        }
        function frenar(){
            echo "estoy frenando <br>";
        }
        function establece_color($color_coche){
            echo "El color de este coche es: ".$this->color."<br>";
            $this->color=$color_coche;
            echo "El color de este coche es: ". $this->color."<br>";
        }
        function getMotor(){
            return $this->motor;
        }
    }

    $renault=new Coche();
    $mazda=new Coche();
    $mazda->arrancar();
    $mazda->girar();
    $renault->frenar();
    echo "el numero de ruedas es: ". $mazda->ruedas."<br>";
    echo $mazda->getMotor()."<br>";
    
    $mazda->establece_color("Amarillo");
    ?>
</body>
</html>