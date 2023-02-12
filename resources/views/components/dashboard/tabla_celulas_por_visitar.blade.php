@props(['celulas'])
<div
    class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white shadow-lg rounded-sm border border-slate-200">
    
    <header class="flex justify-between px-5 py-4 border-b border-slate-100">
        <h2 class="font-semibold text-slate-800 uppercase">Visitas Pendientes</h2>
        <button class="bg-blue-500 hover:bg-blue-700 text-base text-white font-bold py-1 px-4 rounded">
            Agregar Visita
        </button>
    </header>
    <div class="p-3">
        <div class='overflow-y-scroll h-96'>
            <table class="w-full">
                <ol class="text-sm font-medium divide-y divide-slate-100">
                    @foreach ($celulas as $celula)
                        <li class="p-2">
                            <div class="flex justify-between">
                            <div class="div">
                                <div class="text-slate-800">{{$celula->celula->anfitrion}}</div>
                                <p>{{$celula->fecha}}</p>

                            </div>
                                <x-modal-agregar-visita />
                            </div>
                        </li>            
                    @endforeach        
                </ol>
            </div>

        </div>
    </div>
</div>
