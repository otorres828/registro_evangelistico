<?php

namespace App\Http\Controllers;

use App\Models\Visita;
use Illuminate\Http\Request;

class VisitaController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'fecha'=>'required',
        ]);
    

        Visita::create([
            'celula_id'=>$request->anfitrion,
            'user_id'=>auth()->user()->id,
            'estatus'=>1,
            'fecha'=>$request->fecha
        ]);
        return redirect()->route('visitas_pendientes')->with('celula_creada','Se añadio la visita con exito');
    }

    public function update(Visita $visita,Request $request)
    {
        $request->validate(['fecha'=>'required']);
        $visita->update(['fecha'=>$request->fecha]);
        return redirect()->route('visitas_pendientes')->with('celula_creada','Se modifico la hora de la visita con exito');
    }

    public function destroy(Visita $visita){
        $visita->delete();
        return redirect()->route('visitas_pendientes')->with('celula_creada','Se elimino la visita con exito');
    }

    public function finalizar(Visita $visita,Request $request){
        $request->validate(['observaciones'=>'required']);
        $visita->update(['observaciones'=>$request->observaciones,'estatus'=>2]);
        if($request->fecha){
            Visita::create([
                    'user_id'=>$visita->user_id,
                    'celula_id'=>$visita->celula_id,
                    'estatus'=>1,
                    'fecha'=>$request->fecha
                ]);
            $mensaje='Se finalizo la visita con exito y se creo la proxima visita el '.$request->fecha;
        }
        $mensaje='Se finalizo la visita con exito';

        return redirect()->route('visitas_pendientes')->with('celula_creada',$mensaje);
    }

}
