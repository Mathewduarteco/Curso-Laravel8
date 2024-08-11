<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::view('/', 'pagina');

/* Route::get('/{cadena?}',function ($cadena = null) {
    $resultado = "Hola mundo en Laravel";
    switch ($cadena) {
        case 'hola-mundo':
            $resultado = "Hola desde la ruta de usuario0";
            break;
        case 'hola-laravel':
            $resultado = "Reforzando clases y tengo menos de un mes";
            break;
        default:
            $resultado = "Perdona, No te he entendido";
            break;
    }
    //echo " Hola mundo en Laravel, estudio OpenBootcamp, Agosto del 2024";
    
    return view('welcome' [
        'cadena' => $resultado
    ]);
});
*/