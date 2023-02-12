<?php

use App\Http\Controllers\CelulasController;
use App\Http\Controllers\VisitaController;
use App\Http\Livewire\VP;
use App\Http\Livewire\CE;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'visitas-pendientes');
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // Route::get('panel', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('visitas-pendientes', VP::class)->name('visitas_pendientes');
    Route::get('celulas-evangelisticas', CE::class)->name('celulas_evangelisticas');
    Route::resource('celulas', CelulasController::class)->except('show','create')->names('celulas');
    Route::resource('visitas', VisitaController::class)->except('show','create')->names('visitas');


});