<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatriculaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/matriculas', [MatriculaController::class, 'index'])->name('matriculas.index');
Route::get('/matriculas/create', [MatriculaController::class, 'create'])->name('matriculas.create');
Route::post('/matriculas', [MatriculaController::class, 'store'])->name('matriculas.store');
