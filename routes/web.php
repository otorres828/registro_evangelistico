<?php

use App\Http\Controllers\CelulasController;
use App\Http\Controllers\CelulasOficialesController;
use App\Http\Controllers\VisitaController;
use App\Http\Livewire\VP;
use App\Http\Livewire\CE;
use App\Http\Livewire\CO;
use App\Http\Livewire\Visitas;
use App\Http\Livewire\VisitasTodas;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'visitas-pendientes');
Route::put('visita/finalizar/{visita}', [VisitaController::class,'finalizar'])->middleware('auth')->name('visitas.finalizar');
Route::get('celulas-evangelisticas', CE::class)->middleware('auth')->name('celulas_evangelisticas.index');
Route::get('celulas-oficiales', CO::class)->middleware('auth')->name('celulas_oficiales');
Route::resource('celulas', CelulasController::class)->middleware('auth')->except('index','show','create','edit')->names('celulas');

Route::get('visitas-pendientes', VP::class)->middleware('auth')->name('visitas_pendientes');
Route::get('visitas-todas', Visitas::class)->middleware('auth')->name('visitas_todas');
Route::resource('visitas', VisitaController::class)->middleware('auth')->except('show','create','edit','show')->names('visitas');

Route::resource('celulas/oficiales', CelulasOficialesController::class)->middleware('auth')->only('update','store','destroy')->names('oficiales');
Route::post('celulas/oficiales/convertir/{celula}', [CelulasOficialesController::class,'convertir'])->middleware('auth')->name('oficiales.convertir');

Route::get('todas-las-visitas/{celula_id}',VisitasTodas::class)->middleware('auth')->name('celulas_evangelisticas.visitas');
