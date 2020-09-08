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
  	

	if(!empty($_POST['nota_español']) && !empty($_POST['nota_matematicas']) && !empty($_POST['nota_historia']) && !empty($_POST['id_alumno'])){
			///$conexionbd = conectar_bd();

		
			$español = $_POST['nota_español'];
			$matematicas = $_POST['nota_matematicas'];
			$historia = $_POST['nota_historia'];
			$id_alumno = $_POST['id_alumno'];

          $query = "UPDATE alumno SET espanol='$español',matematicas='$matematicas',historia='$historia' WHERE id='$id_alumno'"; 


			$exito = mysqli_query($conexion, $query);

			if($exito){
				header('Location: BienvenidoProfesor.php');
			}else{
				echo $_POST['id_alumno'];
				echo $_POST['nota_español'];
				echo $_POST['nota_historia'];
				echo $_POST['nota_matematicas'];

			//	header('Location:error.php');
			}

	}else{
		header('Location:agregarCalificacion.php');
	}
	
}
?>