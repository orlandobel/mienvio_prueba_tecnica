<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [ProductosController::class, 'view']);
Route::post('/producto/filtrar/precios', [ProductosController::class, 'filtrar_precio']);
Route::post('/producto/filtrar/nombre', [ProductosController::class, 'filtrar_nombre']);

Route::view('/nuevo', 'nuevo');
Route::post('/guardar', [ProductosController::class, 'crear_producto']);
