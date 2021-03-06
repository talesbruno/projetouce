<?php

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
use App\Http\Controllers\GuiaController;

Route::get('/', [GuiaController::class, 'index']);
Route::get('/Pontos_Turisticos/listar', [GuiaController::class, 'listarTodosPontosTuristicos']);
Route::get('/Cadastrar_Pontos_Turisticos/Adicionar_Novo_Local', [GuiaController::class, 'addNovoLocal'])->middleware('auth');
Route::get('/Pontos_Turisticos/{id}', [GuiaController::class, 'show']);
Route::post('/Cadastrar_Novo_Local', [GuiaController::class, 'store']);
Route::delete('/Pontos_Turisticos/{id}', [GuiaController::class, 'destroy'])->middleware('auth');
Route::get('/Pontos_Turisticos/edit/{id}', [GuiaController::class, 'edit'])->middleware('auth');
Route::put('/Pontos_Turisticos/update/{id}', [GuiaController::class, 'update'])->middleware('auth');

Route::get('/dashboard', [GuiaController::class, 'dashboard'])->middleware('auth');

Route::post('/Pontos_Turisticos/join/{id}', [GuiaController::class, 'joinComment'])->middleware('auth');




