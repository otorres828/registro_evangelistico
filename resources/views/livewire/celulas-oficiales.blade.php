<div class="col-span-full xl:col-span-12 bg-white shadow-lg rounded-sm border border-slate-200">
    <x-jet-validation-errors class="mb-4" />

    <header class="flex justify-between items-start px-5 py-4 border-b border-slate-100">
        <x-celulas-oficiales.modal-agregarcelula />
        <div>
            <x-jet-input wire:model="buscar"  type="text" class="w-full"  placeholder="Buscar..." />                

            {{-- <input wire:model="buscar"type="text" class="p-3 sm:p-2 bg-slate-50 text-gray-600 rounded-lg shadow xl:w-96 "
                placeholder="Buscar..."> --}}

        </div>
    </header>
    <div class="px-3">
        @if ($celulas->count() > 0)
            <div class='p-3 overflow-x-scroll'>
                <table class="w-full">
                    <!-- Table header -->
                    <thead class="text-xs uppercase text-slate-400 bg-slate-50 rounded-sm">
                        <tr>
                            <th class="p-2">
                                <div class="font-semibold text-left">ANFITRION</div>
                            </th>
                            <th class="p-2">
                                <div class="font-semibold text-left">UBICACION</div>
                            </th>
                            <th class="p-2">
                                <div class="font-semibold text-center">TELEFONO</div>
                            </th>
                            <th class="p-2">
                                <div class="font-semibold text-center">DIA</div>
                            </th>

                            <th class="p-2">
                                <div class="font-semibold text-center">ACCIONES</div>
                            </th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody class="text-sm font-medium divide-y divide-slate-100  h-32">
                        <!-- Row -->
                        @foreach ($celulas as $celula)
                            <tr>
                                <td class="p-2">
                                    <div class="flex items-center">

                                        <div class="text-slate-800">{{ $celula->anfitrion }}</div>
                                    </div>
                                </td>
                                <td class="p-2 ">
                                    <div class="text-justify">{{ $celula->ubicacion }}</div>
                                </td>
                                <td class="p-2">
                                    @if ($celula->telefono)
                                        <div class="text-center text-emerald-500">{{ $celula->telefono }}</div>
                                    @else
                                        <div class="bg-red-500 p-2 font-bold text-white rounded-full text-xs text-center">
                                            NO TIENE
                                        </div>
                                    @endif
                                </td>
                                <td class="p-2 text-center">
                                    {{$celula->dia }}
                                </td>
                                <td class="p-2 ">
                                    <div class="flex justify-center">
                                        <x-celulas-oficiales.modal-editar-celula :celula="$celula" :dia="$celula->dia"/>
                                        <x-celulas-oficiales.modal-eliminar-celula :celula="$celula"/>
    
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pt-4 pb-2">
                    {{ $celulas->links() }}
                </div>
            </div>
        @else
            <h1 class="text-gray-600 font-semibold text-xl text-center p-5">No se encontraron registros</h1>
        @endif
    </div>
</div>
