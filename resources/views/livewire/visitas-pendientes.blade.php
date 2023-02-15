<div
    class="flex flex-col col-span-full sm:col-span-12  bg-white shadow-lg rounded-sm border border-slate-200">
    <div class="font-bold pl-4 pt-3">
        <x-jet-validation-errors class="mb-4" />
    </div>
    <header class="flex justify-between px-5 py-4 border-b border-slate-100">
        {{-- <h2 class="font-semibold text-slate-800 uppercase">Visitas Pendientes</h2> --}}
        <x-visitas.modal-agregar-visita :anfitriones="$anfitriones" />
        {{-- <input wire:model="buscar"type="text" class="p-2 bg-slate-50 text-gray-600 rounded-lg shadow xl:w-96 " placeholder="Buscar..."> --}}
        <div class="px-4 pt-2">
            {{$celulas->links()}}    
        </div>
    </header>
    <div class="px-3">
        @if ($celulas->count() > 0)
        <div class='p-3 overflow-auto h-auto'>
            <table class="w-full">
                <thead class="text-xs uppercase text-slate-400 bg-slate-50 rounded-sm">
                    <tr>
                        <th class="p-2">
                            <div class="font-semibold text-left">ANFITRION</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-left">FECHA DE VISITA</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-center">ACCIONES</div>
                        </th>
                    </tr>
                </thead>
                <tbody class="text-sm font-medium divide-y divide-slate-100 overflow-y-scroll h-32">
                    @foreach ($celulas as $celula)
                        <tr>
                            <td class="p-2">
                                <div class="flex items-center">

                                    <div class="text-slate-800">{{ $celula->anfitrion }}</div>
                                </div>
                            </td>
                            <td class="p-2">
                                <div class="text-justify">{{ Carbon\Carbon::parse($celula->fecha)->format('d-M') }}</div>
                                <p>{{ Carbon\Carbon::parse($celula->estatus)->isoFormat('h:mm a') }}</p>
                                          
 </td>
                         
                            <td class="p-2 ">
                                <div class="flex justify-center">
                                    <x-visitas.modal-finalizar-visita :celula="$celula" />
                                    <x-visitas.modal-editar-visita :fecha="$celula->fecha" :celula="$celula"/>
                                    <x-visitas.modal-eliminar-visita :celula="$celula"/>

                                </div>
                            </td>
                        </tr>           
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <h1 class="text-gray-600 font-semibold text-xl text-center p-5">No se encontraron registros</h1>
    @endif
    </div>
</div>
