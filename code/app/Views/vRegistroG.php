<?php
include_once('funciones_comunes.php');
$opciones_combo_usuarios=combo_usuarios();
$opciones_combo_tipos=combo_tipos();
$id_usuario = $_POST['id_usuario'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario</title>
	<style>
		body{
			background: #c2d6d6;
		}
	</style>
</head>
<body>
	<br><br><br>
	<h1><center>Registro</center></h1>
	<h2><center>¡¡Bienvenido!!</center></h2>
	<h3><center>Ingrese correctamente sus datos</center></h3>
	<form method="POST" action="../Home/insertarG">
		<div>	
		<center>Cantidad: <input required type="number" name="cantidad" id="cantidad"></center>
		<br>
		<center>Descripción: <input required type="text" name="descrip" id="descrip"></center>
		<br>
		<input type="hidden" name="id_usuario" value="<?php echo $id_usuario ?>" id="id_usuario">
		<center>Fecha: <input required type="date" name="fecha" id="fecha"></center>
		<br>
		<center>Tipo: <select required type="text" name="id_tipo" id="id_tipo"><?php echo $opciones_combo_tipos;?></select></center>
		<br>
		<center><input type="submit" name="enviar" value="Registrar"></center>
	</form>
	</div>
	<br/><br/>
</body>
</html>