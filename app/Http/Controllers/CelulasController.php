<?php

namespace App\Http\Controllers;

use App\Models\CelulasEvangelistica;
use Illuminate\Http\Request;

class CelulasController extends Controller
{
    public function Index(){
        return redirect()->router('celulas_evangelisticas.index');
    }

    public function store(Request $request){
        $request->validate([
            'anfitrion'=>'required',
            'ubicacion'=>'required',
        ]);

        CelulasEvangelistica::create([
            'anfitrion'=>$request->anfitrion,
            'ubicacion'=>$request->ubicacion,
            'telefono'=>$request->telefono,
            'user_id'=>auth()->user()->id
        ]);

        return redirect()->route('celulas_evangelisticas.index')->with('celula_creada','Se añadio la celula con exito');

    }

    public function update(Request $request, CelulasEvangelistica $celula){
        $request->validate([
            'anfitrion'=>'required',
            'ubicacion'=>'required',
        ]);
        $celula->update($request->all());
        return redirect()->route('celulas_evangelisticas.index')->with('celula_creada','Se actualizo la celula con exito');

    }

    public function destroy(CelulasEvangelistica $celula)
    {
        $celula->delete();
        return redirect()->route('celulas_evangelisticas.index')->with('celula_creada','Se convirtio la celula evangelistica a celula oficial con exito');
    }
}
