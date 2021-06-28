<?php

use Illuminate\Support\Facades\Route;
//Para usar trabajar con las viestas desde el controñador hay que declarar su uso
use App\Http\Controllers\EmpleadoController;
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

/*
Route::get('/', function () {
    return view('welcome');
});
Route::get('/empleado', function () {
    return view('empleado.index');
});
//Accedemos a la clase create del controlador cuando el usuario digite empleado/create
Route::get('/empleado/create', [EmpleadoController::class, 'create']);
*/


//Para traer todas las clases
Route::resource('/empleado', EmpleadoController::class);