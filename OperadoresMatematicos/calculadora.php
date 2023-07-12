<style>
.resultado{
    color:#F00;
    font-weight:bold;
    font-size:32px;
}
</style>


<?php
        if(isset($_POST["button"])){
            $numero1=$_POST["num1"];
            $numero2=$_POST["num2"];
            $operacion=$_POST["operacion"];

            calcular($operacion);
        }
        function calcular($calculo){
            global $numero1;
            global $numero2;
            if(!strcmp("suma", $calculo)){
                echo "<p class='resultado'>El resultado es: ".($numero1+$numero2)."</p>";
            }
            if(!strcmp("resta", $calculo)){
                echo "El resultado es: ".($numero1-$numero2);
            }
            if(!strcmp("multiplicación", $calculo)){
                echo "El resultado es: ".($numero1*$numero2);
            }
            if(!strcmp("división", $calculo)){
                echo "El resultado es: ".($numero1/$numero2);
            }
            if(!strcmp("módulo", $calculo)){
                echo "El resultado es: ".($numero1%$numero2);
            }
        }
    ?>