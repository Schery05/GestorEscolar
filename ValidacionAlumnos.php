<?php 
	$servidor = "localhost";
 	$nombrebd  = "Escuela";
 	$usurario = "root";
 	$contra = "";
 
 	$conexion = mysqli_connect($servidor, $usurario, $contra, $nombrebd);

	if (!$conexion)
	  {
	  	die("Conexion fallida con la base de datos".mysqli_connect_error());
	 }else{
	 }
	  	

	  if(!empty($_POST['nombres_alumnos']) && !empty($_POST['apellidos_alumnos'] && !empty($_POST['pass_alumnos']))){

	  	$nombre = $_POST['nombres_alumnos'];
	  	$apellido = $_POST['apellidos_alumnos'];
	  	$password = $_POST['pass_alumnos'];
	  	
		$query = "SELECT nombre, id, pass FROM alumno WHERE nombre='$nombre'";

		$resultado = mysqli_query($conexion, $query);
	  	$registro = mysqli_fetch_assoc($resultado);

		if($registro['pass'] == $password){
				session_start();
				$_SESSION['alumno'] = $registro['id'];
				$_SESSION['nombre'] = $registro['nombre'];
				header('Location: BienvenidoAlumno.php');

		}else{
				echo "PASS INCORRECTO ";
				echo $registro['pass'];
				echo " ";
				echo $_POST['pass_alumnos'];
		}
	 }else{
				header('Location: index.php');
	 }

?>