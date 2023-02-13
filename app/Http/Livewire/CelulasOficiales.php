<?php

namespace App\Http\Livewire;

use App\Models\CelulasOficiale;
use Livewire\Component;
use Livewire\WithPagination;

class CelulasOficiales extends Component
{
    use WithPagination;
    protected $paginationTheme = 'tailwind';
    public $buscar=null;
    public function render()
    {

        $celulas= CelulasOficiale::search($this->buscar)->where('user_id',auth()->user()->id)->orderBy('dia','asc')->paginate(7);

        return view('livewire.celulas-oficiales',compact('celulas'));
    }
}
