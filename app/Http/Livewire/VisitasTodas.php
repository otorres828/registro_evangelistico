<?php

namespace App\Http\Livewire;

use App\Models\CelulasEvangelistica;
use App\Models\Visita;
use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class VisitasTodas extends Component
{
    use AuthorizesRequests;

    public $cantidad,$anfitrion,$celula_id,$ubicacion;
    
    public function mount($celula_id){
        // $this->authorize('publicado',$celula_id);

        $this->celula_id=$celula_id;
        $this->cantidad= Visita::where('user_id',auth()->user()->id)->where('celula_id',$celula_id)->where('estatus',2)->count();
        $cel=CelulasEvangelistica::where('user_id',auth()->user()->id)->where('id',$celula_id)->first();
        $this->anfitrion=$cel->anfitrion;
        $this->ubicacion=$cel->ubicacion;
    }
    public function render()
    {
        return view('livewire.visitas-todas');
    }
}
