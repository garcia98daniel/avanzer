<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvidenciaController; 
use App\Http\Controllers\FichaController; 

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




Route::get('instructor/evidencias', [EvidenciaController::class, 'getEvidencias']);

Route::get('instructor/evidencias/activar/{id}', [EvidenciaController::class, 'activarEvidencias']);

Route::get('aprendiz/evidencias', [EvidenciaController::class, 'getEvidenciasAprendiz']);

Route::get('evidencias/subir/{id}', [EvidenciaController::class, 'verEvidencia']);

Route::post('evidencias/subir/{id}', [EvidenciaController::class, 'actualizarEvidencia']);


// Route::get('/evidencias', function () {
//     return view('welcome');
// });

// Route::get('/user', function (Request $request) {
//     return $request->user();
// });