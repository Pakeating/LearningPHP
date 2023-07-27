<?php
include("conexion.php");
$id=$_GET["ID"];
$base->query("DELETE FROM USERDATA WHERE ID='$id'");
header("location:index.php");


?>