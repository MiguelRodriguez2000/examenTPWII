<?php

function combo_usuarios($id_usuario=0){
	$conexion= new mysqli("localhost", "root", "", "examen");

$sql= "SELECT * FROM usuarios";

$resultado = $conexion->query($sql);

$combo='';
if($resultado){
	while($fila=$resultado->fetch_assoc()){
		if ($fila['id_usuario']==$id_usuario){
			$combo.= '<option selected value="'.$fila['id_usuario'].'">'.$fila['nombres'].'</option>';
		}else{


		$combo.='<option value="'.$fila['id_usuario'].'">'.$fila['nombres'].'</option>';
	}
}}
return $combo;
}


function combo_tipos($id_tipo=0){
	$conexion= new mysqli("localhost", "root", "", "examen");

$sql= "SELECT * FROM tipos";

$resultado = $conexion->query($sql);

$combo='';
if($resultado){
	while($fila=$resultado->fetch_assoc()){
		if ($fila['id_tipo']==$id_tipo){
			$combo.= '<option selected value="'.$fila['id_tipo'].'">'.$fila['nombre'].'</option>';
		}else{


		$combo.='<option value="'.$fila['id_tipo'].'">'.$fila['nombre'].'</option>';
	}
}}
return $combo;
}