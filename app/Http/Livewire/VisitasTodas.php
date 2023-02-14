<?php

namespace App\Http\Livewire;

use App\Models\CelulasEvangelistica;
use App\Models\Visita;
use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class VisitasTodas extends Component
{
    use AuthorizesRequests;

    public $cantidad,$anfitrion,$celula_id;
    
    public function mount($celula_id){
        // $this->authorize('publicado',$celula_id);

        $this->celula_id=$celula_id;
        $this->cantidad= Visita::where('user_id',auth()->user()->id)->where('celula_id',$celula_id)->count();
        $this->anfitrion=CelulasEvangelistica::where('id',$celula_id)->first()->anfitrion;
    }
    public function render()
    {
        return view('livewire.visitas-todas');
    }
}
