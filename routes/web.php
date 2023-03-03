<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicioController;

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

// Route::prefix('api')->group(function () {
//     // Routes
//     Route::get('token', [ServicioController::class, 'token']);
//     Route::get('services', [ServicioController::class, 'show']); 
// });

//Auth::routes();

Route::get('/', [ServicioController::class, 'home'])->name('home');
Route::post('/guardar-service', [ServicioController::class, 'store'])->name('guardar-service');
Route::get('/services', [ServicioController::class, 'create'])->name('services');
Route::get('/service/{filename}', [ServicioController::class, 'getImage'])->name('service-file');
