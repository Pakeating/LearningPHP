<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

</head>
<body>
<?php
    if(isset($_POST["enviar"])){

   
    try{
        $base= new PDO("mysql:host=localhost;dbname=pruebas","root","francisco");
        $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql="SELECT * FROM USERS WHERE USER=:login AND PASS=:pass";
        $resultado=$base->prepare($sql);
        $login=htmlentities(addslashes($_POST["login"]));
        $password=htmlentities(addslashes($_POST["password"]));
        $resultado->bindValue(":login",$login);
        $resultado->bindValue(":pass", $password);
        $resultado->execute();

        $registros=$resultado->rowCount();
        if($registros!=0){
            
            $autenticado=true;
            if(isset($_POST["recordar"])){
                setcookie("nombreUsuario", $_POST["login"], time()+86400);
            }
           
        }else{
           echo"Error: Usuario o contraseña incorrectos";
        }



    }catch(Exception $e){
        die("Error en la conexion con la DB: ". $e->GetMessage());
    }
    }
    ?>
    <?php
    
    if($autenticado==false){
        if(!isset($_COOKIE["nombreUsuario"])){
            include("formulario.html");
        }
    }else{
        echo"Hola ". $_SESSION["usuario"];
        include("contenido.html");
    }
    ?>

        
    
    
    
</body>
</html>