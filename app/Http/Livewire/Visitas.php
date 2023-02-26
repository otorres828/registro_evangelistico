<?php

namespace App\Http\Livewire;

use App\Models\CelulasEvangelistica;
use App\Models\Visita;
use Livewire\Component;
use Livewire\WithPagination;

class Visitas extends Component
{
    use WithPagination;
    public $cantidad;

    public function render()
    {
        $ce= CelulasEvangelistica::where('user_id',auth()->user()->id)->get();

        $cv=Visita::where('user_id',auth()->user()->id)->where('estatus',2)->count();
        $pv=Visita::where('user_id',auth()->user()->id)->where('estatus',1)->count();
        $this->cantidad= Visita::where('user_id',auth()->user()->id)->where('estatus',2)->count();
        $visitas=Visita::where('user_id',auth()->user()->id)->where('estatus',2)->paginate(10);
        return view('livewire.visitas',compact('visitas','pv','ce','cv'));
    }
}
