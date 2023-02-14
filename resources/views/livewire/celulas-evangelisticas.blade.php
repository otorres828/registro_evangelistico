<div class="col-span-full xl:col-span-12 bg-white shadow-lg rounded-sm border border-slate-200">
    <x-jet-validation-errors class="mb-4" />

    <header class="flex justify-between items-start px-5 py-4 border-b border-slate-100">
        <x-celulas-evangelisticas.agregar />
        <div>
            <input wire:model="buscar"type="text" class="p-2 bg-slate-50 text-gray-600 rounded-lg shadow xl:w-96 "
                placeholder="Buscar...">

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
                                <div class="font-semibold text-center">SE VISITO</div>
                            </th>
                            <th class="p-2">
                                <div class="font-semibold text-center">PROXIMA VISITA</div>
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
                                    <div class="text-center text-emerald-500">{{ $celula->telefono }}</div>
                                </td>
                                <td class="p-2">
                                    <a href="{{route('todas_las_visitas',$celula->id)}}" class="text-center">
                                       {{ $celula->nvisitas }}
                                    </a>
                                </td>
                                <td class="p-2">
                                    <div class="text-center">
                                        @if ($celula->estatus)
                                            <div class="bg-green-500 p-2 font-bold text-white rounded-full text-xs">
                                                {{ Carbon\Carbon::parse($celula->estatus)->format('d-M') }}
                                            </div>
                                        @else
                                            <div class="bg-red-500 p-2 font-bold text-white rounded-full text-xs">
                                                NO TIENE
                                            </div>
                                        @endif
                                    </div>
                                </td>
                                <td class="p-2">
                                    <div class="text-center">
                                        <div class="relative inline-flex" x-data="{ open: false }">
                                            <button class="text-slate-400 hover:text-slate-500 rounded-full"
                                                :class="{ 'bg-slate-100 text-slate-500': open }" aria-haspopup="true"
                                                @click.prevent="open = !open" :aria-expanded="open">
                                                <span class="sr-only">Menu</span>
                                                <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32">
                                                    <circle cx="16" cy="16" r="2" />
                                                    <circle cx="10" cy="16" r="2" />
                                                    <circle cx="22" cy="16" r="2" />
                                                </svg>
                                            </button>
                                            <div class="origin-top-right z-10 absolute top-full right-0 min-w-36 bg-white border border-slate-200 py-1.5 rounded shadow-lg overflow-hidden mt-1"
                                                @click.outside="open = false" @keydown.escape.window="open = false"
                                                x-show="open"
                                                x-transition:enter="transition ease-out duration-200 transform"
                                                x-transition:enter-start="opacity-0 -translate-y-2"
                                                x-transition:enter-end="opacity-100 translate-y-0"
                                                x-transition:leave="transition ease-out duration-200"
                                                x-transition:leave-start="opacity-100"
                                                x-transition:leave-end="opacity-0" x-cloak>
                                                <ul>
                                                    <li>
                                                        <x-celulas-evangelisticas.editar :celula="$celula" />
                                                    </li>

                                                    <li>
                                                        <x-celulas-evangelisticas.eliminar :celula="$celula" />
                                                    </li>
                                                    <hr>
                                                    <li>
                                                        <x-celulas-evangelisticas.convertir :celula="$celula" />
                                                    </li>
                                                    <li>
                                                        <a href="{{route('todas_las_visitas',$celula->id)}}"
                                                        class="cursor-pointer font-bold text-sm text-green-600 hover:text-green-800 flex py-1 px-3 hover:bg-gray-200">Ver Visitas</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
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
