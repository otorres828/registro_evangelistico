<?php

use App\Http\Controllers\CelulasController;
use App\Http\Controllers\VisitaController;
use App\Http\Livewire\VP;
use App\Http\Livewire\CE;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'visitas-pendientes');
Route::get('visitas-pendientes', VP::class)->middleware('auth')->name('visitas_pendientes');
Route::get('celulas-evangelisticas', CE::class)->middleware('auth')->name('celulas_evangelisticas');
Route::resource('celulas', CelulasController::class)->middleware('auth')->except('show','create')->names('celulas');
Route::resource('visitas', VisitaController::class)->middleware('auth')->except('show','create')->names('visitas');


require_once __DIR__ . '/fortify.php';
