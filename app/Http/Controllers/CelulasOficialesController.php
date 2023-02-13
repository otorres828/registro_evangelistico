<?php

namespace App\Http\Controllers;

use App\Models\CelulasOficiale;
use Illuminate\Http\Request;

class CelulasOficialesController extends Controller
{
  
    public function store(Request $request)
    {
        $request->validate([
            'anfitrion'=>'required',
            'ubicacion'=>'required',
            'dia'=>'required',
        ]);
        if($request->dia)
        CelulasOficiale::create([
            'anfitrion'=>$request->anfitrion,
            'ubicacion'=>$request->ubicacion,
            'telefono'=>$request->telefono,
            'dia'=>$request->dia,
            'user_id'=>auth()->user()->id
        ]);
        return redirect()->route('celulas_oficiales')->with('celula_creada','Se agrego la celula con exito');

    }

    public function update($id,Request $request)
    {
        $request->validate([
            'ubicacion'=>'required',
            'dia'=>'required',
        ]);
        
        $celula=CelulasOficiale::find($id);
        $celula->update([
            'dia'=>$request->dia,
            'ubicacion'=>$request->ubicacion,
            'telefono'=>$request->telefono,
        ]);
        return redirect()->route('celulas_oficiales')->with('celula_creada','Se modifico el dia la celula con exito');
    }

    public function destroy($id)
    {
        CelulasOficiale::destroy($id);
        return redirect()->route('celulas_oficiales')->with('celula_eliminada','Se elimino la celula con exito');
    }
}
