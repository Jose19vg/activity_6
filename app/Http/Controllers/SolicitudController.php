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
        return view('index'); 
    }

    /**
     * Muestra el formulario para crear una nueva solicitud.
     */
    public function create()
    {
        return view('create'); 
    }

    /**
     * Muestra el formulario para editar una solicitud existente.
     */
    public function edit($id)
    {
        // La función sigue existiendo pero no carga una vista.
        return "Ruta de edición para el producto con ID: " . $id;
    }
    
}
