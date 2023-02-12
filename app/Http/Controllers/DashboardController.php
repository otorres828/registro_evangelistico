<?php

namespace App\Http\Controllers;
use App\Models\CelulasEvangelistica;
use App\Models\Visita;

class DashboardController extends Controller {

    public function index(){
        $celulas_evangelisticas= CelulasEvangelistica::where('user_id',auth()->user()->id)->get();
        $celulas_visitadas=Visita::where('estatus',2)->count();
        $por_visitar=Visita::where('estatus',1)->count();

        $pendientes=Visita::where('estatus',1)->get();
        return view('pages.dashboard',compact('celulas_evangelisticas','celulas_visitadas','por_visitar','pendientes'));
    }

}
