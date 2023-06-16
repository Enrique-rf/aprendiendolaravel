<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return 'usuarios'; 
    }

    public function create()
    {
        return 'Crear nuevo usuario';
    }

    public function show()
    {
        return "Mostrando Detalle del usuario: {$id}";
    }
};
