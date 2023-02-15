<?php

namespace App\Http\Livewire;

use App\Models\Visita;
use Livewire\Component;
use Livewire\WithPagination;

class VisitasCelulas extends Component
{
    use WithPagination;
    protected $paginationTheme = 'tailwind';
    private $visitas;

    public function mount($celula_id){
        $this->visitas= Visita::where('user_id',auth()->user()->id)->where('celula_id',$celula_id)->where('estatus',2)->paginate(7);
    }

    public function render()
    {
        $visitas = $this->visitas;
        return view('livewire.visitas-celulas',compact('visitas'));
    }
}
