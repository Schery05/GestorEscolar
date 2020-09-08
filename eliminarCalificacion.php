<?php
	$servidor = "localhost";
 	$nombrebd  = "Escuela";
 	$usurario = "root";
 	$pass = "";
 
 	$conexion = mysqli_connect($servidor, $usurario, $pass, $nombrebd);

if (!$conexion)
  {
  	die("Conexion fallida con la base de datos".mysqli_connect_error());
  }else{
  	 }

  	$query = "SELECT *FROM alumno WHERE id=".$_GET['alumnoid'];

  	$resultado = mysqli_query($conexion, $query);
   	$registro = mysqli_fetch_assoc($resultado);

   	  	mysqli_close($conexion);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Eliminar calificaciones</title>
	<link href="landon/theme/css/bootstrap.css" rel="stylesheet">
	<link href="landon/theme/css/main.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600' rel='stylesheet' type='text/css'>
</head>
<body id="top" class="eliminarCalificacion">
	<?php
		$matematicas = "matematicas";
		$espanol = "espanol";
		$historia = "historia";
				echo "	<h2>Español:".$registro['espanol']."</h2/> ";
				echo "<h4><a class='btn-primary color2' href='procesoDeEliminacion.php?idalumno=".$registro['id']."&materia=$espanol'> Eliminar Calificacion </a> </h4><br />";

				echo "	<h2>Matematicas:".$registro['matematicas']."</h2/> ";
				echo "<h4><a class='btn-primary color2' href='procesoDeEliminacion.php?idalumno=".$registro['id']."&materia=$matematicas'> Eliminar Calificacion </a> </h4><br />";

				echo "	<h2>Historia:".$registro['historia']."</h2/> ";
				echo "<h4><a class='btn-primary color2' href='procesoDeEliminacion.php?idalumno=".$registro['id']."&materia=$historia'> Eliminar Calificacion </a></h4> <br />";

	?>
</body>
</html>