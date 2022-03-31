<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Actualizar registro</title>
	<style>
		body{
			background: #c2d6d6;
		}
	</style>
</head>
<body>
	<br><br><br>
	<h1><center>Registro encontrado</center></h1>
	<form method="POST" action="../Home/actualizarRegistro">
		<div>	
		<center>ID: <input required type="text" name="id_usuario" id="id_usuario" value="<?php echo $id_usuario; ?>" readonly></center>
		<br>
		<center>Nombres: <input required type="text" name="nombres" id="nombres" value="<?php echo $nombres; ?>"></center>
		<br>
		<center>Apellidos: <input required type="text" name="apellidos" id="apellidos" value="<?php echo $apellidos; ?>"></center>
		<br>
		<center>Correo: <input required type="text" name="correo" id="correo" value="<?php echo $correo; ?>"></center>
		<br>
		<center>Contraseña: <input required type="text" name="contra" id="contra" value="<?php echo $contra; ?>"></center>
		<br>
		<center><input type="submit" name="Actualizar" value="Actualizar"></center>
	</form>
	</div>
	<br/><br/>
</body>
</html>