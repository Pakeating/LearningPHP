<?php
$textoMail=$_POST["comentarios"];
$destinatario=$_POST["email"];
$asunto=$_POST["asunto"];
$headers="MIME-Version:1.0\r\n";
$headers.="Content-type: text/html;charset=iso-88859-1\r\n";
$headers.="From: Prueba pakeating <pakeating@pakeating.com>\r\n";
$exito=mail($destinatario,$asunto,$textoMail,$headers);
if($exito){
    echo"Mensaje enviado con exito";
}else{
    echo"Error enviando el mensaje";
}

?>
