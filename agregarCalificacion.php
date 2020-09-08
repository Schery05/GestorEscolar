<?php
	$servidor = "localhost";
 	$nombrebd  = "Escuela";
 	$usuario = "root";
 	$pass = "";
 
 	$conexion = mysqli_connect($servidor, $usuario, $pass, $nombrebd);

if (!$conexion)
  {
  	die("Conexion fallida con la base de datos".mysqli_connect_error());
  }else{
  	 }
  	$query = "SELECT * FROM alumno WHERE id=".$_GET['alumnoid'];
  	$resultado = mysqli_query($conexion, $query);
   	$registro = mysqli_fetch_assoc($resultado);

  	mysqli_close($conexion);
/*<input class="testblock" type="text" name="nombre_alumno" value="<?php echo $registro['nombre'] ?>" disabled><br />
		<input class="testblock" type="text" name="apellido_alumno" value="<?php echo $registro['apellido'] ?>" disabled><br />-->*/
?>

   


<!DOCTYPE html>
<html>
<head>
	<title>Agregando calificacion</title>
	<link href="landon/theme/css/bootstrap.css" rel="stylesheet">
	<link href="landon/theme/css/main.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../escuela/Css/css/style.css">

</head>
<body id="top" class="masthead">
	<h2>Agreando calificacion</h2>
	<form action="actualizarCalificacion.php" method="post" name="AgregarCalifacacion" >

		<h3><label>Nombre: <?php echo $registro['nombre'];?></label></h3>
		<h3><label>Apellido: <?php echo $registro['apellido'];?></label></h3>
		
		<label>Español</label>
		<input class="testblock" type="number" name="nota_español" value="<?php echo $registro['espanol'] ?>"><br />
		<label>Matematicas</label>
		<input class="testblock" type="number" name="nota_matematicas" value="<?php echo $registro['matematicas'] ?>"><br />
		<label>Historia</label>
		<input class="testblock" type="number" name="nota_historia" value="<?php echo $registro['historia'] ?>"><br />

		<input type="hidden" name="id_alumno" value="<?php echo $registro['id'] ?>"><br />



		<input type="submit" name="botonAgregarCalificacion" value="Enviar"  class="btn-primary">

	</form>
</body>
</html>