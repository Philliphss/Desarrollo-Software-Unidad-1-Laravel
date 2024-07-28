<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('proyectos', [ProyectoController::class, 'indexView'])->name('index');
Route::get('proyectos/crear', [ProyectoController::class, 'createView'])->name('create');
Route::get('proyectos/{id}/editar', [ProyectoController::class, 'editView'])->name('edit');
Route::get('proyectos/{id}', [ProyectoController::class, 'showView'])->name('show');
