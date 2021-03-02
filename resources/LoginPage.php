<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>El Poste - Login</title>
	<link href = "css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<!------CSS-Propios------>
	<link href="css/EstilosTodos.css" rel="stylesheet" type="text/css">
	<link href="css/Estilos-loginpage.css" rel="stylesheet" type="text/css"/>
	<!--link href="css/media-loginpage.css" rel="stylesheet" type = "text/css"-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<?php
		session_start();
		session_destroy();
	?>
	<div class="todo">
		<header class="header">
			<div class="logo">
				<h1><a href="../index.php">El Poste</a></h1>
			</div>
		</header>
		<div class="contenido">
			<section class="login">
			<?php
				error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
				if($_GET['error']==si){
    			echo '<p  style="color:red; text-align: center;">Usuario o contraseña incorrecta</p>';
				}
			?>
					<form class="form" action="php/entrar.php" method="POST" onsubmit="validarFormulario()">
						<label for="text">Usario</label><input type="text" class="form-control" id = "user" name="user">
						<label for="text">Contraseña</label><input type="password" class="form-control" id = "password" name="password">
						<input type="submit" class="btn btn-outline-dark" value="Entrar">
					</form>
					<div class="registro">
						<p>No tienes cuenta aun? <a href="CuestionarioRegistro.php">registrarse</a></p>
					</div>
			</section>
			<section class="log-img">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
				Sapiente veniam placeat officiis possimus ipsa repellendus,
				a praesentium omnis! Libero dolorum voluptatum blanditiis illum
				dolore excepturi accusantium laboriosam commodi dicta magnam?</p>
			</section>
		</div>
		<footer class="footer">
			<p>El Poste. All rigths reserved. Copyrigth 2020&copy;</p>
		</footer>
	</div>
</body>
</html>
