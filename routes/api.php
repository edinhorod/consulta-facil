<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['prefix' => ''], function() {
    Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);
    Route::get('/cidades', [App\Http\Controllers\CidadeController::class, 'index']);
    Route::get('/cidades/{cidade_id}/medicos', [App\Http\Controllers\CidadeController::class, 'getDoctorsByCity']);
    
    Route::get('/medicos', [App\Http\Controllers\MedicoController::class, 'index']);
});

Route::middleware('auth:api')->group(function() {
    Route::get('/user', [App\Http\Controllers\UserController::class, 'user']);

    Route::group(['prefix' => 'medicos'], function() {
        Route::post('/', [App\Http\Controllers\MedicoController::class, 'store']);
        Route::put('/{medico_id}', [App\Http\Controllers\MedicoController::class, 'update']);
        Route::post('/{id_medico}/pacientes', [App\Http\Controllers\MedicoController::class, 'linkPatientDoctor']);
        Route::get('/{id_medico}/pacientes', [App\Http\Controllers\MedicoController::class, 'getPatientDoctor']);
    });
    
    Route::group(['prefix' => 'pacientes'], function() {
        Route::post('/', [App\Http\Controllers\PacienteController::class, 'store']);
        Route::put('/{paciente_id}', [App\Http\Controllers\PacienteController::class, 'update']);
    });

    
    Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout']);
});
