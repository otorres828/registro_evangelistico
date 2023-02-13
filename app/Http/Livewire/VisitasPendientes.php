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
        $celulas=Visita::search($this->buscar)->where('estatus',1)->orderBy('fecha','asc')->paginate(6);
        $anfitriones = CelulasEvangelistica::all();
        return view('livewire.visitas-pendientes',compact('celulas','anfitriones'));
    }
}
