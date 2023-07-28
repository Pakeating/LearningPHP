<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD</title>
<link rel="stylesheet" type="text/css" href="hoja.css">


</head>

<body>
<?php
    //Conectamos con la DB y almacenamos todo en un array de objetos
  include("conexion.php");
//------------------------------------------------
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

$sql_total="SELECT * FROM USERDATA"; 
$resultado=$base->prepare($sql_total);
$resultado->execute(array());
$nfilas=$resultado->rowCount();
$totalPaginas=ceil($nfilas/$tamPagina);//ceil redondea al alza el numero de paginas

echo"Numero de registros de la consulta: ". $nfilas."<br>";
echo "Mostramos ".$tamPagina." registros por pagina <br>";
echo"Mostrando la pagina ". $pagina. " de ". $totalPaginas."<br>";

$resultado->closeCursor();

//-----------------------------------------

  if(isset($_POST["cr"])){
    $nombre=$_POST["Nom"];
    $apellido=$_POST["Ape"];
    $direccion=$_POST["Dir"];
    $query="INSERT INTO USERDATA (NOMBRE, APELLIDO, DIRECCION) VALUES (:nom, :ape,:dir);";
    $resultado=$base->prepare($query);
    $resultado->execute(array(":nom"=>$nombre, ":ape"=>$apellido, ":dir"=>$direccion ));
    
  }
  
  $conexion=$base->query("SELECT * FROM USERDATA LIMIT $empezarDesde,$tamPagina");
  $registros=$conexion->fetchAll(PDO::FETCH_OBJ);
  
?>

<h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <table width="50%" border="0" align="center">
    <tr >
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Apellido</td>
      <td class="primera_fila">Dirección</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr> 
   
		<?php
      foreach($registros as $persona)://esta nomenclatura nos permite hacer un foreach sin tener que sacar el codigo HTML concatenando
      
    ?> 
   	<tr>
      <td><?php echo $persona->ID ?></td>
      <td><?php echo$persona->NOMBRE?></td>
      <td><?php echo $persona->APELLIDO?></td>
      <td><?php echo $persona->DIRECCION?></td>
 
      <td class="bot"><a href="delete.php?ID=<?php echo$persona->ID?>"><input type='button' name='del' id='del' value='Borrar'></a></td>

      <td class='bot'><a href="editar.php?ID=<?php echo$persona->ID?>& nom=<?php echo$persona->NOMBRE?>
      & ape=<?php echo$persona->APELLIDO?> & dir=<?php echo$persona->DIRECCION?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
    </tr> 
    <?php 
      endforeach; //fin del bucle
    ?>
    
	<tr>
	<td></td>
      <td><input type='text' name='Nom' size='10' class='centrado'></td>
      <td><input type='text' name='Ape' size='10' class='centrado'></td>
      <td><input type='text' name=' Dir' size='10' class='centrado'></td>
      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>    
      
      <tr><td><?php
      for($i=1; $i<=$totalPaginas;$i++){
      echo "<a href='?pagina= ".$i."'> ".$i."</a>, " ;
      }?></td></tr>
    </table>
</form>




<p>&nbsp;</p>
</body>
</html>