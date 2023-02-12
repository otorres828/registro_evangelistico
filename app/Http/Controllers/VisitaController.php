<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitaController extends Controller
{



    public function store(Request $request)
    {
        $request->validate([
            'anfitrion'=>'required',
            'ubicacion'=>'required',
        ]);

      

        return redirect()->route('visitas_pendientes')->with('celula_creada','Se añadio la celula con exito');
    }


    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
