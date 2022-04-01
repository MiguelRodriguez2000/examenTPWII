<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario</title>
</head>
<body>
	<br><br><br>
	<h1><center>Registro</center></h1>
	<h2><center>¡¡Bienvenido!!</center></h2>
	<h3><center>Ingrese correctamente sus datos</center></h3>
	<form method="POST" action="../Home/insertarForm">
		<div>	
		<center>Nombre: <input required type="text" name="nombres" id="nombres"></center>
		<br>
		<center>Apellido: <input required type="text" name="apellidos" id="apellidos"></center>
		<br>
		<center>Correo: <input required type="text" name="correo" id="correo"></center>
		<br>
		<center>Contraseña: <input required type="text" name="contra" id="contra"></center>
		<br>
		<center><input type="submit" name="enviar" value="Registrar"></center>
	</form>
	</div>
	<br/><br/>
    <center><a href="../Home/ingreso">Ya tienes una cuenta??</a></center>
</body>
</html>
