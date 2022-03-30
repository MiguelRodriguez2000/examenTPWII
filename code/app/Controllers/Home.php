<?php

namespace App\Controllers;

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
    /*public function insertarrForm(){
        $mUsuarios = new mUsuarios();
        $usuarioNuevo = [
            "usuario" => $_Post['email'],
            "password" => $_Post['password']
        ];
        $mUsuarios->insert($usuarioNuevo);
        $datoId['idRegistrado'] = $mUsuarios->
        db->insertID();

        return view("vSuccess");

    }*/
}

