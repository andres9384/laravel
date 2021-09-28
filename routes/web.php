<?php

use App\Http\Controllers\ZoologicoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


//RUTAS SIN CONTROLADOR
/*
//Nombrar una ruta normal 
Route::get('/zoologico', function () {
    return "Bienvenido al zoologico";
});

//Nombrar una ruta con parametros y con un remplazo en caso de no recibir un parametro 
Route::get('/zoologico/{plantas}', function ($plantas="animales") {
    return "Bienvenido al Zoologico, Seccion de {$plantas}";
});

//Nombrar una ruta con parametros 
Route::get('/zoologico/{plantas}', function ($plantas) {
    return "Bienvenido al Zoologico, Seccion de {$plantas}";
});*/

//RUTAS CON CONTROLADOR
Route::get('zoologico',[ZoologicoController::class,"index"]);

Route::get('zoologico/create',[ZoologicoController::class,"create"]);

Route::get('zoologico/{animal}',[ZoologicoController::class,"show"]);
