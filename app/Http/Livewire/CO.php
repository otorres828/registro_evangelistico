<?php

namespace App\Http\Livewire;

use App\Models\CelulasEvangelistica;
use App\Models\CelulasOficiale;
use App\Models\Visita;
use Livewire\Component;

class CO extends Component
{
    public function render()
    {
        $co= CelulasOficiale::where('user_id',auth()->user()->id)->count();

        return view('livewire.co',compact('co'));
    }
}
