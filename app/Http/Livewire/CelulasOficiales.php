<?php

namespace App\Http\Livewire;

use App\Models\CelulasOficiale;
use Livewire\Component;

class CelulasOficiales extends Component
{
    public function render()
    {
        $celulas= CelulasOficiale::where('user_id',auth()->user()->id)->orderBy('fecha','asc')->get();

        return view('livewire.celulas-oficiales',compact('celulas'));
    }
}
