<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    /**
     * Muestra la lista de solicitudes.
     */
    public function index()
    {
        return view('index'); // Asegúrate de crear resources/views/index.blade.php
    }

    /**
     * Muestra el formulario para crear una nueva solicitud.
     */
    public function create()
    {
        return view('create'); // Asegúrate de crear resources/views/create.blade.php
    }

    /**
     * Muestra el formulario para editar una solicitud existente.
     */
    public function edit($id)
    {
        return view('edit'); // Asegúrate de crear resources/views/edit.blade.php
    }
}
