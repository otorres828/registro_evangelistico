<?php

namespace App\Http\Livewire;

use App\Models\CelulasEvangelistica;
use App\Models\Visita;
use Livewire\Component;

class CE extends Component
{
    public function render()
    {
        $ce= CelulasEvangelistica::where('user_id',auth()->user()->id)->get();

        $cv=Visita::where('user_id',auth()->user()->id)->where('estatus',2)->count();
        $pv=Visita::where('user_id',auth()->user()->id)->where('estatus',1)->count();

        return view('livewire.ce',compact('cv','pv','ce'));
    }
}
