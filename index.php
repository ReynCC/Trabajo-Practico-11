<!DOCTYPE html>
<html>
<head>
	<title>Correo</title>
	<link rel="stylesheet" type="text/css" href="tp11.css">
</head>
<body>
	<section class="flex">
		<form method="post">
		<h3>Enviar Correo Electronico</h3><br><br>
	<input type="text" placeholder="Nombre" name="name" size="20" maxlength="50" class="caja"><br><br>
	<input type="email" placeholder="mail" name="name" size="20" maxlength="50" class="caja"><br><br>
	<input type="text" placeholder="Asunto" name="name" size="20" maxlength="50" class="caja"><br><br>
	<textarea id="area" name="Texto" placeholder="Escribe el texto aqui..." rows="4" cols="40" "></textarea>
	<input type="submit" name="msg" value="Enviar"> <input type="reset" id="botonBorrar" value="Borrar" />
	</section>
	</form>
	<?php
	include("correo.php")
	?>
</body>
</html>