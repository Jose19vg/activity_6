<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolicitudController; // Importa el controlador

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar rutas web para tu aplicación. Estas
| rutas son cargadas por RouteServiceProvider y contienen el middleware "web".
|
*/

// Ruta de bienvenida (puedes eliminarla si no la usas)
Route::get('/', function () {
    return view('welcome');
});

// Rutas para el controlador de solicitudes
Route::resource('solicitudes', SolicitudController::class);
