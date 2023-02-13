<?php

use App\Http\Controllers\CelulasController;
use App\Http\Controllers\VisitaController;
use App\Http\Livewire\VP;
use App\Http\Livewire\CE;
use App\Http\Livewire\CO;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'visitas-pendientes');
Route::put('visita/finalizar/{visita}', [VisitaController::class,'finalizar'])->middleware('auth')->name('visitas.finalizar');
Route::get('celulas-evangelisticas', CE::class)->middleware('auth')->name('celulas_evangelisticas');
Route::get('celulas-oficiales', CO::class)->middleware('auth')->name('celulas_oficiales');
Route::resource('celulas', CelulasController::class)->middleware('auth')->except('show','create','edit')->names('celulas');

Route::get('visitas-pendientes', VP::class)->middleware('auth')->name('visitas_pendientes');
Route::resource('visitas', VisitaController::class)->middleware('auth')->except('show','create','edit','show')->names('visitas');


