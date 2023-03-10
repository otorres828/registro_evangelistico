<div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
    @php
        $titulo = 'Hola, ' . auth()->user()->name;
    @endphp

    <x-app.dashboard :ce="$ce" :cv="$cv" :pv="$pv" titulo="Todas las Visitas">

        <div class="col-span-full bg-white shadow-lg rounded-sm border border-slate-200">
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
                                        <div class="font-semibold text-left">ANFITRION</div>
                                    </th>
                                    <th class="p-2">
                                        <div class="font-semibold text-left">OBSERVACIONES</div>
                                    </th>
                                </tr>
                            </thead>
                            <!-- Table body -->
                            <tbody class="text-sm font-medium divide-y divide-slate-100  h-32">
                                <!-- Row -->
                                @foreach ($visitas as $visita)
                                    <tr>
                                        <td class="p-2">
                                            <div class="text-center text-gary-500 ">
                                                {{ Carbon\Carbon::parse($visita->fecha)->format('d-M') }}</div>
                                        </td>
                                        <td class="p-2">
                                            <div class="text-justify  text-gary-500 ">{{ $visita->celula->anfitrion }}
                                            </div>
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
        </div>
    </x-app.dashboard>
</div>
