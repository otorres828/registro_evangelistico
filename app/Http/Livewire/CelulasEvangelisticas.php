<?php

namespace App\Http\Livewire;

use App\Models\CelulasEvangelistica as CE;
use App\Models\Visita;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class CelulasEvangelisticas extends Component
{
    use WithPagination;
    protected $paginationTheme = 'tailwind';
    public $buscar=null;
    public $cantidad_total,$cantidad_visitar;

    public function render()
    {
        $user_id=auth()->user()->id;  
        $celulas= CE::search($this->buscar)->where('user_id',auth()->user()->id)->paginate(10);
        $this->cantidad_total= CE::where('user_id',auth()->user()->id)->count();
        $this->cantidad_visitar= $this->celulas_por_visitar();

        return view('livewire.celulas-evangelisticas',compact('celulas'));
    }

    public function celulas_por_visitar(){
        $celulas= CE::where('user_id',auth()->user()->id)->get();
        $contador=0;
        foreach($celulas as $celula)
            if($celula->estatus)
                $contador=$contador+1;
        return $contador;
    }
}
