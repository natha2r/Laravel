<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProveedorController;

Route::get('empleados', [EmpleadoController::class, 'index']); 
Route::post('empleados', [EmpleadoController::class, 'store']);
Route::get('empleados/{id}', [EmpleadoController::class, 'show']);
Route::put('empleados/{id}', [EmpleadoController::class, 'update']);
Route::delete('empleados/{id}', [EmpleadoController::class, 'destroy']);

Route::post('proveedores', [ProveedorController::class, 'store']);
Route::get('proveedores', [ProveedorController::class, 'index']);
Route::get('proveedores/{id}', [ProveedorController::class, 'show']);
Route::put('proveedores/{id}', [ProveedorController::class, 'update']);
Route::delete('proveedores/{id}', [ProveedorController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
