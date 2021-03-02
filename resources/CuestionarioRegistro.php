<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>El Poste - Registro</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<!------CSS-Propios------>
	<link href="css/EstilosTodos.css" rel="stylesheet" type="text/css">
	<link href="css/Estilos-registro.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="todo">
		<header class="header">
			<div class="logo">
				<h1><a href="../index.php">El Poste</a></h1>
			</div>
		</header>
		<section class="login">
			<h3>Registro</h3>
			<form action="registrar.php" enctype="application/x-www-form-urlencoded" method="POST" class="form">
				<label for="user">Usuario</label>
				<input type="text" class="form-control" placeholder="usuario" name="user">
				<label for="email">Correo</label>
				<input type="email" class="form-control" placeholder="correo@ejemplo.com" name="email">
				<label for="telefono">Telefono</label>
				<input type="tel" class="form-control" placeholder="numero telf." name="telefono">
				<label for="clave">Contraseña</label>
				<input type="password" class="form-control" placeholder="contraseña" name="password" id="clave">
				<label for="confirm">Confirme su contraseña</label>
				<input type="password" class="form-control" id="confirm">
				<button type="button" class="btn btn-outline-dark">Registrarse</button>
			</form>
		</section>
		<footer class="footer">
			<p>El Poste. All rigths reserved. Copyrigth 2020&copy;</p>
		</footer>
	</div>
</body>

</html>