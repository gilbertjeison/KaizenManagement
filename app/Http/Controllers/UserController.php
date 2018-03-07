<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = ['Ramiro','Sebastian','Caballo','Camilo','<script>alert("Cliker")</script>'];
//        return view('users',['users' => $users, 'title' => 'Listado de usuarios creados por medio de un arreglo']);

        $title = 'Listado de usuarios por medio de un arreglo!';

        return view('users',compact('title','users'));
    }

    public function nuevoUsuario()
    {
        return "Usuario creado correctamente desde el controlador papa!";
    }

    public function usuarioDetalle($id)
    {
        return "Mostrando detalles del usuario {$id} desde el controlador";
    }

}
