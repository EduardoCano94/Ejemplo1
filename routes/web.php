<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/mensaje', function () {
    return ('Hola Mundo');
});
//ruta para mostrar la vista
//1. se crea el archivo en resources/views/vista.blade.php
//2. se crea la ruta en web.php
Route::view('/ruta-vista', 'vista');
//3. se accede a la ruta desde el navegador
//4. se muestra la vista
//ruta con parametro obligatorio
Route::view('/ruta-vista','vista', ['titulo' => 'Bienvenido usuario', 'nombre' => 'Escriba su nombre']);
//ruta con vista con controlador
use App\Http\Controllers\VistaController;
{
    Route::get('/vista-controlador', [VistaController::class, 'index']);
}
//ruta con parametro en url
use Illuminate\Http\Request;
{
    Route::get('/nueva-vista', function (Request $request) {
        return "Hola " . $request->get('variable');
        });
}

//ruta para recibir parametros en la url por medio de un controlador

    Route::get('/ruta-controlador/{id}', [VistaController::class, 'recibirParametros']);

//ruta para recibir parametros en la url por medio de un controlador a la vista
   // Route::resource ('ruta-vista/{id}', VistaController::class,);
//grupo de rutas
    Route::prefix ('ruta')->group(function () {
        Route::get('/vista', [VistaController::class, 'index'])->name ('vista.index');
        Route::get('/vista/create', [VistaController::class, 'create'])->name ('vista.create');
        Route::get('/vista/show', [VistaController::class, 'show'])->name ('vista.show');
        Route::get('/vista/edit', [VistaController::class, 'edit'])->name ('vista.edit');
        Route::get('/vista/destroy', [VistaController::class, 'destroy'])->name ('vista.destroy');
    });

   // Route::resource ('rutanueva/vista', VistaController::class);