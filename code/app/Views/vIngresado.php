<!DOCTYPE html>
<html>
<head>
	<title>Ingresado</title>
</head>
<body>
	<br>
	<div class="container">
		<h1><center>Registro actual ingresado</center></h1>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Correo</th>
					<th>Contraseña</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Actualizar</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					 <td><?php echo $id_usuario; ?></td>
					 <td><?php echo $correo; ?></td>
					 <td><?php echo $contra; ?></td>
					 <td><?php echo $nombres; ?></td>
					 <td><?php echo $apellidos; ?></td>
					 <td><form method="POST" action="<?php echo base_url();?>/examen/examenTPWII/code/public/Home/buscarRegistro">
			<input type="hidden" name="id_usuario" value="<?php echo $id_usuario;?>">
			<button type="submit">Actualizar datos</button>
		</form></td>
				</tr>
			</tbody>
		</table>
		
	</div>
	<br/><br/>
	<?php
$conexion = new mysqli("localhost", "root", "", "examen");
$sql = "SELECT gastos.*, (SELECT nombres FROM usuarios WHERE id_usuario=gastos.id_usuario) As usuario, (SELECT nombre FROM tipos WHERE id_tipo=gastos.id_tipo) As tipo FROM gastos where id_usuario=$id_usuario";
$resultado=$conexion->query($sql);
$tabla='<table border="1">
        <tr>
               <th> ID </th>
               <th> CANTIDAD </th>
               <th> DESCRIPCIÓN </th>
               <th> USUARIO </th>
               <th> TIPO </th>
               <th> ACCIONES </th>
        </tr>
';
if($resultado){
		while($fila = $resultado->fetch_assoc()){
		$tabla .= '
        <tr>
               <td> '.$fila['id_gasto'].'  </td>
               <td> '.$fila['cantidad'].' </td>
               <td> '.$fila['descrip'].' </td>
               <td> '.$fila['usuario'].' </td>
               <td> '.$fila['tipo'].' </td>
               
               <td>
               <form method="POST" action="buscarRegistroG">
			<input type="hidden" name="id_gasto" value="'.$fila['id_gasto'].'">
			<input type="hidden" name="id_usuario" value="'.$fila['id_usuario'].'">
			<button type="submit">Actualizar</button>
		</form>
		<form method="POST" action="eliminarRegistroG">
			<input type="hidden" name="id_gasto" value="'.$fila['id_gasto'].'">
			<input type="hidden" name="id_usuario" value="'.$fila['id_usuario'].'">
			<button type="submit">Eliminar</button>
		</form>
               </td>    
        </tr>
		
';
	}

	$tabla .= '</table>';
}
	echo '<h2>Listado de Gastos</h2>';
	echo $tabla;
	?>
</body>
<footer>
	<br>
	<div class="text-center text-dark p-3" style="background-color: rgba(0,0,0,0.2);">
		<i class="bi bi-badge-cc"></i> 2022:
		<form method="POST" action="registroG">
			<input type="hidden" name="id_usuario" value=<?php echo $id_usuario?>>
			<button type="submit">Registrar gasto</button>
		</form>
	</div>
</footer>
</html>