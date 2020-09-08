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
  	echo "Conexion establecida correctamente.";
  	 }

$materia = $_GET['materia'];

  	$query = "UPDATE alumno SET $materia = '0' WHERE id=".$_GET['idalumno'] ;
  	$resultado = mysqli_query( $conexion, $query);
   	$registro = mysqli_fetch_assoc($resultado);

	$exito = mysqli_query($conexion, $query);

			if($exito){
				header('Location: BienvenidoProfesor.php');
			}else{
				
			}
   	?>