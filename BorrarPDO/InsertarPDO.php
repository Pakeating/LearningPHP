<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*para hacer consultas preparadas:
    Utilizando el objeto conexion se prepara con su metodo prepare($sql)
    Esto devuelve un objeto PDOStatement, que a su vez contiene los metodos execute() y fetch()

    */
    $codart=$_POST["codart"];
    $seccion=$_POST["seccion"];
    $nomart=$_POST["nomart"];
    $precio=$_POST["precio"];
    $fecha=$_POST["fecha"];
    $pog=$_POST["pog"];
    
    try{
    $base=new PDO("mysql:host=localhost;dbname=pruebas","root","francisco");
    $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//con esto le indicamos que genere objetos excepcion para poderlos capturar posteriormente
    
    $sql="INSERT INTO ARTÍCULOS (CODARTICULO,SECCION, NOMBREARTICULO, FECHA, PAISORIGEN,PRECIO) VALUES (:codart,:seccion,:nomart,:fecha,:pog,:precio)";

    $resultado=$base->prepare($sql);
    $resultado->execute(array(":codart"=>$codart, ":seccion"=>$seccion, ":nomart"=>$nomart, ":precio"=>$precio, ":fecha"=>$fecha, ":pog"=>$pog));
    
    echo "Registro insertado";

    $resultado->closeCursor();

    }catch(Exception $e){
        die("ERROR: ".$e->GetMessage());
    }

    ?>
</body>
</html>