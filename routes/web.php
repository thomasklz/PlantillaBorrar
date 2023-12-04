<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AutorController::class, 'index'] );
Route::post('/autor', [AutorController::class, 'registrar'] );
Route::put('/autor/{id}', [AutorController::class, 'actualizar'] );
Route::delete('/autor/{id}', [AutorController::class, 'eliminar'] );
Route::get('/autor/{id}', [AutorController::class, 'showautor'] );


Route::get('/libros', [LibroController::class, 'index'] );
Route::post('/libros', [LibroController::class, 'store'] );