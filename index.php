<?php
	session_start();
	include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio | Panel de Control</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />

	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php" style="font-family: 'Lobster', cursive;">Login / Registro</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['usr_id'])) { ?>
				<li><p class="navbar-text">Logeado como <i  ><b><?php echo $_SESSION['usr_name']; ?></b></i></p></li>
				<li><a href="logout.php"><b class="btn btn-danger btn-xs" >Log Out</b></a></li>
				<?php } else { ?>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Registro</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>

<div class="container">

      <!--Componente principal de un mensaje de primario o llamado a la acción -->
      <div class="jumbotron">
        <h1>Login de ejemplo</h1>
        <p>En esta página se utiliza una conexion a base de datos (MySQL) para realizar un registro utilizando el lenguaje de programación orientado as ervidores php.</p>
        <p>Para darle estilo a la página se utiliza un libreria de css bootstrap totalmente responsive.</p>
        <p>
          <a class="btn btn-lg btn-primary" href="https://www.php.net/" role="button">Ver más sobre php »</a>
        </p>
      </div>

    </div>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>