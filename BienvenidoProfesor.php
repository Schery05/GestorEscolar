<?php
 
session_start();
 
echo "<h2 class='title is-1 has-text-light margin-left-1em'>Bienvenid@ Profesor(a) " . $_SESSION['profesor']."</h2>";

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

  	$query = "SELECT *FROM alumno;";
  	$resultado = mysqli_query( $conexion, $query);
  	mysqli_close($conexion);
?>
<html>
	<link rel="stylesheet" href="../Escuela/Css/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.0/css/bulma.css">
<head>
	<title>Lista de los alumnos</title>
	
</head>
<body id="top" class="has-background-dark">
	<h1 class="title is-2 has-text-light .margin-left-2em">Lista de los alumnos</h1>

		<div class="panel-block">
	    <p class="control has-icons-left">
<input  class="input" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
	      <span class="icon is-left">
	        <i class="fas fa-search" aria-hidden="true"></i>
	      </span>
	    </p>
 	 </div>
		<ul>
			<div class="section">
				<table id="myTable">

			<?php
			while($registro = mysqli_fetch_assoc($resultado)){
				
				echo '		
 				 <tr class="header">
       				<td class="padding-right padding-left has-text-light padding-top">'.$registro['nombre']." ".$registro['apellido'].'</td>

				    <th class="padding-right has-text-light "><a href="agregarCalificacion.php?alumnoid='.$registro['id'].'"><button class="button margin-left padding-left margin-right margin-top is-danger is-outlined">
					    <span> Agregar o Editar Calificacion</span>
					    <span class="icon is-small">
					      <i class="fas fa-times"></i>
					    </span>
					  </button> </a></th>


				    <th class="padding-right has-text-light "><a href="verCalificaciones.php?alumnoid='.$registro['id'].'"><button class="button margin-left padding-left margin-right margin-top is-danger is-outlined">
					    <span>Ver Calificacion</span>
					    <span class="icon is-small">
					      <i class="fas fa-times"></i>
					    </span>
					  </button> </a></th>

				    <th class="padding-right has-text-light "><a href="eliminarCalificacion.php?alumnoid='.$registro['id'].'"><button class="button margin-left padding-left margin-right margin-top is-danger is-outlined">
					    <span>Borrar Calificacion</span>
					    <span class="icon is-small">
					      <i class="fas fa-times"></i>
					    </span>
					  </button> </a></th>

				  </tr>';

				/*<table id="myTable">
				  <tr class="header">
				    <td class="has-text-light">'.$registro['nombre']." ".$registro['apellido'].'</td>
				    <td class="has-text-light"><a href="agregarCalificacion.php?alumnoid='.$registro['id'].'">Agregar Calificaciones</a></td>
				    <td class="has-text-light">Ver Calificaciones</td>
				    <td class="has-text-light">Eliminar Calificaciones</td>
				  </tr>	 


				  <tr>
				    <td>Alfreds Futterkiste</td>
				    <td>Germany</td>
				  </tr>
				</table>'

					echo '<h3 class="subtitle has-text-light"><li>'.$registro['nombre']." ".$registro['apellido'];
					echo "<h3><a href='agregarCalificacion.php?alumnoid=".$registro['id']."'> Agregar o Editar Calificacion  </a></h3>";
					echo "<h3><a href='verCalificaciones.php?alumnoid=".$registro['id']."'> Ver Calificaciones  </a></h3>";
					echo "<h3><a href='eliminarCalificacion.php?alumnoid=".$registro['id']."'> Eliminar Calificaciones </a></h3>";*/
				}

			?>
		</table>
	</div>
			
		</ul>
		<script type="text/javascript" src="js\function.js"></script>

</body>

</html>