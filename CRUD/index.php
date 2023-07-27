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
  $conexion=$base->query("SELECT * FROM USERDATA");
  $registros=$conexion->fetchAll(PDO::FETCH_OBJ);

?>

<h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>

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

      <td class='bot'><input type='button' name='up' id='up' value='Actualizar'></a></td>
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
  </table>

<p>&nbsp;</p>
</body>
</html>