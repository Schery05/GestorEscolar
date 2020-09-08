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


	  if(!empty($_POST['cedula_profesor']) && !empty($_POST['nombres_profesor'] && !empty($_POST['pass_profesor']))){

	  	$cedula = $_POST['cedula_profesor'];
	  	$nombre = $_POST['nombres_profesor'];
	  	$password = $_POST['pass_profesor'];


		$query = "SELECT cedula,nombre, pass FROM profesor WHERE cedula='$cedula'";

		$resultado = mysqli_query($conexion, $query);
	  	$registro = mysqli_fetch_assoc($resultado);

		if($registro['pass'] == $password){
				session_start();
				$_SESSION['profesor'] = $nombre;
				header('Location: BienvenidoProfesor.php');
		}else{
				header('Location: index.php');

		}
	 }else{
				header('Location: index.php');
	 }

?>