<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShutterstockController;

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

Route::get('/', function () {
    return view('index');
});


Route::get('/', [ShutterstockController::class, 'showPirateImages']);

// Agrega una nueva ruta para manejar la búsqueda
Route::get('/search', [ShutterstockController::class, 'showPirateImages'])->name('searchImages');

