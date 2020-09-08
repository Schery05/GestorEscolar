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

  	$query = "SELECT cedula, nombre FROM profesor";
  	$resultado = mysqli_query($conexion, $query);
  	mysqli_close($conexion);
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.0/css/bulma.css">

	<!--<link href="landon/theme/css/bootstrap.css" rel="stylesheet">
	<link href="landon/theme/css/main.css" rel="stylesheet">-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../escuela/Css/css/style.css">

<head>
	<title>Sistema escolar</title>
</head>
<body >
	<!--<main  id="top" class="masthead">
		
	<center>

	<h2>Iniciar sesion como profesor</h2>
		
		<form class="hero is-primary is-fullheight" action="ProcesosProfesor.php" method="post">
			<label>Cedula</label>
			<input type="number" name="cedula_profesor" class="form-control input-lg"><br />

			<label>Nombres</label>
			<input type="text" name="nombres_profesor" class="form-control input-lg"><br />

			<label>Contraseña</label>
			<input type="password" name="pass_profesor" class="form-control input-lg"><br />

			<input type="submit" name="" value="Iniciar sesion" class="btn btn-success btn-lg">
		</form>


	<h2>Iniciar sesion como estudiante</h2>
		<form action="ValidacionAlumnos" method="post" class="form-horizontal">
		
			<label>Nombres</label>
			<input type="text" name="nombres_alumnos" class="form-control input-lg"><br/>

			<label>Apellidos</label>
			<input type="text" name="apellidos_alumnos" class="form-control input-lg"><br/>

			<label>Contraseña</label>
			<input type="password" name="pass_alumnos" class="form-control input-lg"><br/>

     		<input type="submit" name="" value="Iniciar sesion"  class="btn btn-success btn-lg">

		</form>
	</center>
</main>-->



 <section  class="hero is-primary is-fullheight">
 	<div class="section is-primary margin-left margin-top">
		<button id="profesorButton" onClick="appearLoginProfesor()" class="button is-success">Entrar como maestro</button>
		<button id="estudianteButton" onClick="appearLoginEstudiante()" class="button is-success">Entrar como estudiante</button>
	</div>
 	<div id="Loginprofe" class="hero-body is-hidden"> 
    <div class="container">
      <div class="columns is-centered">
        <div class="column is-5-tablet is-4-desktop is-3-widescreen">
          <form action="ProcesosProfesor.php" method="post" class="box">
            <div class="field">
              <label for="" class="label">Cedula</label>
              <div class="control has-icons-left">
                <input type="number" name="cedula_profesor" placeholder="189-0008029-8" class="input" required>
                <span class="icon is-small is-left">
                  <i class="fa fa-envelope"></i>
                </span>
              </div>
            </div>

             <div class="field">
              <label for="" class="label">Nombre</label>
              <div class="control has-icons-left">
                <input type="text" name="nombres_profesor" placeholder="Pedro" class="input" required>
                <span class="icon is-small is-left">
                  <i class="fa fa-envelope"></i>
                </span>
              </div>
            </div>

            <div class="field">
              <label for="" class="label">Password</label>
              <div class="control has-icons-left">
                <input type="password" name="pass_profesor" placeholder="*******" class="input" required>
                <span class="icon is-small is-left">
                  <i class="fa fa-lock"></i>
                </span>
              </div>
            </div>
            <div class="field">
              <label for="" class="checkbox">
                <input type="checkbox">
               Remember me
              </label>
            </div>
            <div class="field">
         		<input type="submit" name="" value="Iniciar sesion"  class="button is-success">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div id="Loginestudiante" class="hero-body is-hidden"> 
    <div class="container">
      <div class="columns is-centered">
        <div class="column is-5-tablet is-4-desktop is-3-widescreen">
          <form action="ValidacionAlumnos.php" method="post" class="box">
            <div class="field">
              <label for="" class="label">Nombre</label>
              <div class="control has-icons-left">
                <input type="text" placeholder="Juan" name="nombres_alumnos" class="input" required>
                <span class="icon is-small is-left">
                  <i class="fa fa-envelope"></i>
                </span>
              </div>
            </div>

             <div class="field">
              <label for="" class="label">Apellido</label>
              <div class="control has-icons-left">
                <input type="text" placeholder="Ramirez" name="apellidos_alumnos" class="input" required>
                <span class="icon is-small is-left">
                  <i class="fa fa-envelope"></i>
                </span>
              </div>
            </div>

            <div class="field">
              <label for="" class="label">Password</label>
              <div class="control has-icons-left">
                <input type="password" placeholder="*******" name="pass_alumnos" class="input" required>
                <span class="icon is-small is-left">
                  <i class="fa fa-lock"></i>
                </span>
              </div>
            </div>
            <div class="field">
              <label for="" class="checkbox">
                <input type="checkbox">
               Remember me
              </label>
            </div>
            <div class="field">
              <button class="button is-success">
                Iniciar Sesion
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script type="text/javascript" src="js\function.js"></script>
</body>


</html>