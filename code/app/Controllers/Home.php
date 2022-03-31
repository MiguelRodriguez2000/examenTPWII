<?php

namespace App\Controllers;
use App\Models\mUsuarios;
use App\Models\mGastos;
class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function bienvenida()
    {
        return view('vbienvenida');
    }
    public function registro(){
        return view('vRegistro');
    }
    public function registroG(){
        return view('vRegistroG');
    }
     public function ingreso(){
        return view('vIngreso');
    }
    public function insertarForm(){
        $mUsuarios = new mUsuarios();
        $usuarioNuevo = [
            "nombre" => $_POST['nombre'],
            "apellido" => $_POST['apellido'],
            "correo" => $_POST['correo'],
            "rol" => $_POST['rol'],
            "contra" => $_POST['contra']
        ];
        $mUsuarios->insert($usuarioNuevo);
        $datoId['id_usuario'] = $mUsuarios->
        db->insertID();
        return view("vSuccess",$datoId );
    }
    public function insertarG(){
        $mGastos = new mGastos();
        $mUsuarios = new mUsuarios();
        $gastoNuevo = [
            "cantidad" => $_POST['cantidad'],
            "descrip" => $_POST['descrip'],
            "id_usuario" => $_POST['id_usuario'],
            "id_tipo" => $_POST['id_tipo']
        ];
        $mGastos->insert($gastoNuevo);
        $datoId['id_gasto'] = $mGastos->
        db->insertID();
        $user= $mUsuarios->where('id_usuario', $_POST['id_usuario'])->first();
        return view("vIngresado",$user );
    }
    public function mostrarRegistros(){
        $mUsuarios = new mUsuarios();
        $todos = $mUsuarios->findAll();
        $usuarios=array('usuarios'=>$todos);
        return view("vRegistros", $usuarios);
    }

    public function ingresarForm(){
        $mUsuarios = new mUsuarios();
        $correo = $_POST['correo'];
        $contra = $_POST['contra'];
        $user= $mUsuarios->where('correo', $correo)->where('contra',$contra)->first();
        return view("vIngresado", $user);
    }
    public function actualizarRegistro(){
        $mUsuarios = new mUsuarios();
        $id_usuario = $_POST['id_usuario'];
        $usuarioActualizado = [
            "nombres" => $_POST['nombres'],
            "apellidos" => $_POST['apellidos'],
            "correo" => $_POST['correo'],
            "contra" => $_POST['contra']
        ];
        $mUsuarios->update($id_usuario, $usuarioActualizado);
        $user= $mUsuarios->where('id_usuario', $_POST['id_usuario'])->first();
        return view("vIngresado", $user);
    }
    public function buscarRegistro(){
        $mUsuarios = new mUsuarios();
        $id_usuario = $_POST['id_usuario'];
        $usuario=$mUsuarios->find($id_usuario);
        return view("vRegistroEncontrado", $usuario);
    }
    public function eliminarRegistro($id){
        $mUsuarios = new mUsuarios();
        $id_usuario = $id;
        $mUsuarios -> delete($id_usuario);

        return $this->mostrarRegistros();
    }
    public function buscarRegistroG(){
        $mGastos = new mGastos();
        $id_gasto = $_POST['id_gasto'];
        $gasto=$mGastos->find($id_gasto);
        return view("vRegistroEncontradoG", $gasto);
    }
    public function eliminarRegistroG(){
        $mGastos = new mGastos();
        $mUsuarios = new mUsuarios();
        $id_gasto = $_POST['id_gasto'];
        
        $mGastos -> delete($id_gasto);
        $user= $mUsuarios->where('id_usuario', $_POST['id_usuario'])->first();
        return view("vIngresado", $user);
    }
    public function actualizarRegistroG(){
        $mUsuarios = new mUsuarios();
        $mGastos = new mGastos();
        $id_gasto = $_POST['id_gasto'];
        $gastoActualizado = [
            "cantidad" => $_POST['cantidad'],
            "descrip" => $_POST['descrip'],
            "id_usuario" => $_POST['id_usuario'],
            "id_tipo" => $_POST['id_tipo']
        ];
        $mGastos->update($id_gasto, $gastoActualizado);
        $user= $mUsuarios->where('id_usuario', $_POST['id_usuario'])->first();
        return view("vIngresado", $user);
    }
    
}
