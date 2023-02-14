<div class="px-3">
    @if ($visitas->count() > 0)
        <div class='p-3 overflow-x-scroll'>
            <table class="w-full">
                <!-- Table header -->
                <thead class="text-xs uppercase text-slate-400 bg-slate-50 rounded-sm">
                    <tr>

                        <th class="p-2">
                            <div class="font-semibold text-center">FECHA DE VISITA</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-left">UBICACION</div>
                        </th>
                     
                    
                        <th class="p-2">
                            <div class="font-semibold text-center">OBSERVACIONES</div>
                        </th>
                    </tr>
                </thead>
                <!-- Table body -->
                <tbody class="text-sm font-medium divide-y divide-slate-100  h-32">
                    <!-- Row -->
                    @foreach ($visitas as $visita)
                        <tr>
                            <td class="p-2">
                                <div class="text-justify text-gary-500 ">{{ $visita->fecha }}</div>
                            </td>
                            <td class="p-2 ">
                                <div class="text-justify  text-gary-500 ">{{ $visita->ubicacion }}</div>
                            </td>
                     
                            <td class="p-2">
                                <div class="text-justify  text-gary-500 ">{{ $visita->observaciones }}</div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="pt-4 pb-2">
                {{ $visitas->links() }}
            </div>
        </div>
    @else
        <h1 class="text-gray-600 font-semibold text-xl text-center p-5">No se encontraron registros</h1>
    @endif
</div>
