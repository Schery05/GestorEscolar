<?php
 
session_start();

 
echo "<h3> Bienvid@ " . $_SESSION['nombre']."</h3>";

//AQUI HAGO UNA CONEXION CON LA BASE DE DATOS.
	$servidor = "localhost";
 	$nombrebd  = "Escuela";
 	$usurario = "root";
 	$contra = "";
 
 	$conexion = mysqli_connect($servidor, $usurario, $contra, $nombrebd);

	if (!$conexion)
	  {
	  	die("Conexion fallida con la base de datos".mysqli_connect_error());
	 }


//AQUII PONGO EL QUERY DE LA BASE DE DATOS Y UTILIZO EL SESSION COMO PARAMWETRO AL WHERE
    $query = "SELECT  *FROM alumno WHERE id='".$_SESSION['alumno']."'";

  	$resultado = mysqli_query($conexion, $query);
  	mysqli_close($conexion);
?>

<!-- AQUI EMPIEZO EL HTML, Y LE COLOCO UNA CADENA DE PHP DENTRO, Y LE HAGO UNA LISTA DE LOS COMPONENTES QUE LLAMO DE LA BASE DE DATOS.-->

<!DOCTYPE html>
<html>
<head>
	<link href="landon/theme/css/bootstrap.css" rel="stylesheet">
	<link href="landon/theme/css/main.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600' rel='stylesheet' type='text/css'>
</head>
<body id="top" class="masthead">
	<h2>Tus calificaciones, son las siguientes: </h2>
	
	<ul>
	<?php
				while($registro = mysqli_fetch_assoc($resultado)){
					echo '<h4><li>'.$registro['espanol'].' Español</h4>';
					echo '<h4><li>'.$registro['matematicas'].' Matematicas</h4>';
					echo '<h4><li>'.$registro['historia'].' Historia</h4>';
				}

			?>
		</ul>
</body>
</html>