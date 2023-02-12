<?php

namespace App\Http\Livewire;

use App\Models\CelulasEvangelistica as CE;
use Livewire\Component;
use Livewire\WithPagination;

class CelulasEvangelisticas extends Component
{
    use WithPagination;


    protected $paginationTheme = 'tailwind';

    public function render()
    {
        
        $celulas= CE::where('user_id',auth()->user()->id)->paginate(6);

        return view('livewire.celulas-evangelisticas',compact('celulas'));
    }
}
