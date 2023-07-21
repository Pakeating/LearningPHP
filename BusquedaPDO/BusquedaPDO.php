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
    $seccion=$_GET["seccion"];
    $pog=$_GET["pog"];
    try{
    $base=new PDO("mysql:host=localhost;dbname=pruebas","root","francisco");
    $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//con esto le indicamos que genere objetos excepcion para poderlos capturar posteriormente
    $sql="SELECT NOMBREARTICULO,SECCION,PRECIO, PAISORIGEN FROM ARTÍCULOS WHERE SECCION= :SECC AND PAISORIGEN= :POG";
    $resultado=$base->prepare($sql);
    $resultado->execute(array(":SECC"=>$seccion, ":POG"=>$pog));
    while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
        echo"Nombre: ". $registro["NOMBREARTICULO"]." Seccion: ".$registro["SECCION"]." Precio: "
        . $registro["PRECIO"]." Pais de origen: ".$registro["PAISORIGEN"]."<br>";
    }
    $resultado->closeCursor();

    }catch(Exception $e){
        die("ERROR: ".$e->GetMessage());
    }

    ?>
</body>
</html>