<div
    class="flex flex-col col-span-full sm:col-span-12  bg-white shadow-lg rounded-sm border border-slate-200">
    <div class="font-bold pl-4 pt-3">
        <x-jet-validation-errors class="mb-4" />
    </div>
    <header class="flex justify-between px-5 py-4 border-b border-slate-100">
        <h2 class="font-semibold text-slate-800 uppercase">Visitas Pendientes</h2>
        <x-visitas.modal-agregar-visita :anfitriones="$anfitriones" />
    </header>
    <div class="px-3">
        <div class='p-3 overflow-auto h-auto'>
            <table class="w-full">
                <!-- Table header -->
                <thead class="text-xs uppercase text-slate-400 bg-slate-50 rounded-sm">
                    <tr>
                        <th class="p-2">
                            <div class="font-semibold text-left">ANFITRION</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-left">FECHA</div>
                        </th>
                        
                        <th class="p-2">
                            <div class="font-semibold text-center">ACCIONES</div>
                        </th>
                    </tr>
                </thead>
                <!-- Table body -->
                <tbody class="text-sm font-medium divide-y divide-slate-100 overflow-y-scroll h-32">
                    <!-- Row -->
                    @foreach ($celulas as $celula)
                        <tr>
                            <td class="p-2">
                                <div class="flex items-center">

                                    <div class="text-slate-800">{{ $celula->celula->anfitrion }}</div>
                                </div>
                            </td>
                            <td class="p-2">
                                <div class="text-justify">{{ $celula->fecha }}</div>
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
            {{$celulas->links()}}
        </div>
    </div>
</div>