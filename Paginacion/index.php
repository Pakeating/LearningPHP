<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    try{
        $base=new PDO("mysql:host=localhost; dbname=pruebas","root", "francisco");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET UTF8");
        
        if(isset($_GET["pagina"])){
            if($_GET["pagina"]==1){
                header("location:index.php");
            }else{
                $pagina=$_GET["pagina"];
            }
        }else{
            $pagina=1;
        }
        
        $tamPagina=3;
        $empezarDesde=($pagina-1)*$tamPagina;

        $sql_total="SELECT NOMBREARTICULO, SECCION, PRECIO, PAISORIGEN FROM ARTÍCULOS WHERE SECCION='DEPORTE'"; 
        $resultado=$base->prepare($sql_total);
        $resultado->execute(array());
        $nfilas=$resultado->rowCount();
        $totalPaginas=ceil($nfilas/$tamPagina);//ceil redondea al alza el numero de paginas

        echo"Numero de registros de la consulta: ". $nfilas."<br>";
        echo "Mostramos ".$tamPagina." registros por pagina <br>";
        echo"Mostrando la pagina ". $pagina. " de ". $totalPaginas."<br>";

        $resultado->closeCursor();

        $sqlLimit="SELECT NOMBREARTICULO, SECCION, PRECIO, PAISORIGEN FROM ARTÍCULOS WHERE SECCION='DEPORTE' LIMIT $empezarDesde,$tamPagina"; 
        $resultado=$base->prepare($sqlLimit);
        $resultado->execute(array());

        while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

            echo "Nombre Artículo: ". $registro["NOMBREARTICULO"]. " Seccion: ".$registro["SECCION"]. 
            " Precio: ". $registro["PRECIO"]." Pais: ".$registro["PAISORIGEN"]."<br>";

        }
        

    }catch(Exception $e){
        echo "ERROR: ". $e->getMessage();
        echo "Linea: ". $e->getLine();
    }


    for($i=1; $i<=$totalPaginas;$i++){
        echo "<a href='?pagina= ".$i."'> ".$i."</a>, " ;
    }

    ?>
</body>
</html>