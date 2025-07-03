<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\DiagnosticoController;
use App\Http\Controllers\Api\EspecialidadController;
use App\Http\Controllers\Api\EstadoCitaController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\TipoNotificacionController;

// ===== RUTAS DE AUTENTICACIÓN =====
// Rutas públicas (sin autenticación)
Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);

// Rutas protegidas (requieren autenticación)
Route::middleware('auth:sanctum')->group(function () {
    // Rutas de autenticación
    Route::post('/auth/logout', [AuthController::class, 'logout']);
    Route::post('/auth/logout-all', [AuthController::class, 'logoutAll']);
    Route::get('/auth/me', [AuthController::class, 'me']);
    Route::put('/auth/change-password', [AuthController::class, 'changePassword']);
    Route::put('/auth/update-profile', [AuthController::class, 'updateProfile']);
    
    // Ruta del usuario (compatibilidad con Laravel)
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // ===== RUTAS DE RECURSOS =====
    // Rutas para RoleController
    Route::apiResource('roles', RoleController::class);
    Route::apiResource('diagnosticos', DiagnosticoController::class);
    Route::apiResource('especialidades', EspecialidadController::class);
    Route::apiResource('estado_citas', EstadoCitaController::class);
    Route::apiResource('tipo_notificaciones', TipoNotificacionController::class);
});
