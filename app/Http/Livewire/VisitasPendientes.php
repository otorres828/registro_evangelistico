<?php

namespace App\Http\Livewire;

use App\Models\CelulasEvangelistica;
use App\Models\Visita;
use Livewire\Component;
use Livewire\WithPagination;

class VisitasPendientes extends Component
{   
    use WithPagination;
    protected $paginationTheme = 'tailwind';
    public $buscar=null;
    
    public function render()
    {
        $celulas=Visita::where('estatus',1)->where('user_id',auth()->user()->id)->orderBy('fecha','asc')->paginate(10);
        $anfitriones = CelulasEvangelistica::where('user_id',auth()->user()->id)->get();
        return view('livewire.visitas-pendientes',compact('celulas','anfitriones'));
    }
}
