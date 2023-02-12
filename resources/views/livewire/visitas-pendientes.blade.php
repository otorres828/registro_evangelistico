<div
    class="flex flex-col col-span-full sm:col-span-12  bg-white shadow-lg rounded-sm border border-slate-200">
    <header class="flex justify-between px-5 py-4 border-b border-slate-100">
        <h2 class="font-semibold text-slate-800 uppercase">Visitas Pendientes</h2>
        <x-modal-agregar-visita :anfitriones="$anfitriones" />

    </header>
    <div class="p-3">
        <div class='overflow-auto h-auto'>
            <ul class="text-sm font-medium divide-y divide-slate-100">
                @foreach ($celulas as $celula)
                    <div class="p-2">
                        <div class="flex justify-between">
                            <div>
                                <div class="text-slate-800">{{ $celula->celula->anfitrion }}</div>
                                <p>{{ $celula->fecha }}</p>
                            </div>
                            <x-modal-visita />
                        </div>
                    </div>
                @endforeach
            </ul>
            {{$celulas->links()}}
        </div>
    </div>
</div>