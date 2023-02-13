@props(['celula','dia'])
<div x-data="{ searchOpen: false }">
    <!-- Button -->
    <button
        class="w-8 h-8 flex items-center justify-center bg-slate-100 hover:bg-slate-200 transition duration-150 rounded-full"
        :class="{ 'bg-slate-200': searchOpen }"
        @click.prevent="searchOpen = true;if (searchOpen) $nextTick(()=>{$refs.searchInput.focus()});"
        aria-controls="search-modal">
        <span class="sr-only">Search</span>
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 0 511.998 511.998" xml:space="preserve" width="64px" height="64px" fill="#000000">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <path style="fill:#E1C3A0;"
                    d="M335.67,39.403l80.111-0.15c17.624-0.033,32.071,14.36,32.104,31.984l0.753,400.547 c0.033,17.624-14.36,32.071-31.984,32.104L96.217,504.49c-17.624,0.033-32.071-14.36-32.104-31.984L63.36,71.959 c-0.033-17.624,14.36-32.071,31.984-32.104l80.109-0.15">
                </path>
                <polyline style="fill:#EFF2FA;"
                    points="367.776,71.387 415.842,71.296 416.594,471.843 96.157,472.446 95.404,71.899 143.47,71.808 ">
                </polyline>
                <path style="fill:#C7CFE2;"
                    d="M303.599,23.442l-25.505,0.048c-3.329-9.308-12.143-16-22.591-15.98 c-10.448,0.02-19.238,6.745-22.531,16.064l-25.505,0.048c-17.697,0.033-32.017,14.407-31.984,32.104l0.06,32.044l160.219-0.301 l-0.03-16.022l-0.03-16.022C335.668,37.728,321.296,23.408,303.599,23.442z">
                </path>
                <rect x="175.509" y="63.086" style="fill:#AFB9D2;" width="160.219" height="24.534"></rect>
                <path
                    d="M455.395,71.222c-0.041-21.786-17.775-39.479-39.553-39.479c-0.024,0-0.052,0-0.076,0l-80.111,0.15 c-0.092,0-0.182,0.011-0.273,0.014c-7.227-9.687-18.784-15.976-31.798-15.976l-20.709,0.039C277.337,6.239,266.927,0,255.488,0 c-11.414,0.021-21.818,6.301-27.327,16.073l-20.708,0.039c-10.565,0.02-20.49,4.153-27.947,11.638 c-1.398,1.403-2.677,2.892-3.833,4.455c-0.073-0.002-0.144-0.011-0.218-0.011c-0.005,0-0.01,0-0.015,0l-80.11,0.15 c-10.529,0.02-20.445,4.163-27.919,11.665c-7.474,7.502-11.58,17.434-11.56,27.963l0.752,400.547 c0.02,10.53,4.163,20.445,11.665,27.919c7.485,7.457,17.385,11.561,27.887,11.56c0.025,0,0.051,0,0.076,0l320.438-0.603 c21.811-0.041,39.521-17.818,39.48-39.628L455.395,71.222z M190.146,38.351c4.625-4.642,10.781-7.206,17.335-7.218l25.505-0.048 c3.178-0.006,6.008-2.012,7.067-5.008c2.332-6.6,8.547-11.043,15.496-11.056c6.902,0,13.122,4.42,15.474,10.998 c1.068,2.988,3.899,4.982,7.072,4.982c0.004,0,0.009,0,0.014,0l25.552-0.048c13.501,0,24.507,10.985,24.533,24.487l0.046,24.534 l-145.199,0.272l-0.046-24.534C182.981,49.159,185.522,42.994,190.146,38.351z M416.64,496.377l-320.438,0.603 c-6.545-0.006-12.673-2.538-17.334-7.181c-4.66-4.642-7.234-10.789-7.246-17.307L70.87,71.945 c-0.012-6.518,2.537-12.674,7.18-17.335s10.789-7.233,17.307-7.245l73.524-0.138c-0.599,2.767-0.913,5.615-0.908,8.514l0.06,32.044 c0.008,4.144,3.369,7.496,7.51,7.496c0.005,0,0.01,0,0.015,0l160.219-0.3c4.148-0.008,7.504-3.377,7.496-7.524l-0.06-32.044 c-0.005-2.922-0.339-5.767-0.95-8.51l73.534-0.138c0.016,0,0.031,0,0.047,0c13.506,0,24.508,10.975,24.533,24.487l0.753,400.548 C441.154,485.326,430.169,496.352,416.64,496.377z">
                </path>
                <path
                    d="M415.841,63.786c-0.004,0-0.009,0-0.014,0l-48.066,0.09c-4.148,0.008-7.504,3.377-7.496,7.524 c0.008,4.144,3.369,7.496,7.51,7.496c0.004,0,0.009,0,0.014,0l40.555-0.076l0.725,385.526l-305.418,0.574l-0.725-385.527 l40.555-0.076c4.148-0.008,7.504-3.377,7.496-7.524c-0.008-4.143-3.369-7.496-7.51-7.496c-0.005,0-0.01,0-0.015,0l-48.066,0.09 c-1.992,0.004-3.9,0.798-5.306,2.21c-1.406,1.411-2.194,3.323-2.19,5.315l0.753,400.548c0.004,1.992,0.798,3.9,2.21,5.306 c1.408,1.402,3.314,2.19,5.3,2.19c0.004,0,0.009,0,0.014,0l320.438-0.603c1.992-0.004,3.9-0.798,5.306-2.21 c1.406-1.411,2.193-3.323,2.19-5.315L423.35,71.281C423.344,67.139,419.984,63.786,415.841,63.786z">
                </path>
                <path
                    d="M255.562,47.066c1.973,0,3.915-0.801,5.307-2.203c1.402-1.392,2.203-3.335,2.203-5.307c0-1.983-0.801-3.915-2.203-5.317 c-1.392-1.392-3.335-2.193-5.307-2.193c-1.973,0-3.915,0.801-5.307,2.193c-1.402,1.402-2.203,3.335-2.203,5.317 c0,1.973,0.801,3.915,2.203,5.307C251.648,46.265,253.59,47.066,255.562,47.066z">
                </path>
                <path
                    d="M130.365,186.687c-2.928,2.939-2.919,7.694,0.02,10.621l24.078,23.988c1.408,1.403,3.314,2.19,5.3,2.19 c0.004,0,0.009,0,0.014,0c1.992-0.004,3.9-0.798,5.306-2.21l39.98-40.13c2.927-2.939,2.918-7.694-0.02-10.622 c-2.939-2.927-7.695-2.919-10.622,0.02l-34.678,34.81l-18.757-18.688C138.046,183.739,133.291,183.748,130.365,186.687z">
                </path>
                <path
                    d="M194.587,258.665l-34.678,34.81l-18.757-18.688c-2.939-2.927-7.694-2.919-10.622,0.02c-2.927,2.939-2.918,7.694,0.02,10.622 l24.078,23.988c1.466,1.46,3.383,2.19,5.3,2.19c1.927,0,3.853-0.737,5.32-2.21l39.98-40.13c2.927-2.939,2.918-7.694-0.02-10.622 C202.27,255.718,197.515,255.726,194.587,258.665z">
                </path>
                <path
                    d="M194.753,346.785l-34.678,34.81l-18.757-18.688c-2.939-2.928-7.695-2.92-10.621,0.02c-2.928,2.939-2.919,7.694,0.02,10.621 l24.078,23.988c1.408,1.403,3.314,2.19,5.3,2.19c0.004,0,0.009,0,0.014,0c1.992-0.004,3.9-0.798,5.306-2.21l39.98-40.13 c2.927-2.939,2.918-7.694-0.02-10.622C202.435,343.838,197.681,343.846,194.753,346.785z">
                </path>
                <path
                    d="M239.826,199.302c0.005,0,0.01,0,0.015,0l136.186-0.256c4.148-0.008,7.504-3.377,7.496-7.524 c-0.008-4.144-3.369-7.496-7.51-7.496c-0.005,0-0.01,0-0.015,0l-136.186,0.256c-4.148,0.008-7.504,3.377-7.496,7.524 C232.324,195.95,235.685,199.302,239.826,199.302z">
                </path>
                <path
                    d="M376.179,272.146c-0.005,0-0.01,0-0.015,0l-136.186,0.255c-4.148,0.008-7.504,3.377-7.496,7.524 c0.008,4.144,3.369,7.496,7.51,7.496c0.005,0,0.01,0,0.015,0l136.186-0.255c4.148-0.008,7.504-3.377,7.496-7.524 C383.681,275.499,380.32,272.146,376.179,272.146z">
                </path>
                <path
                    d="M376.33,360.267l-136.186,0.255c-4.148,0.008-7.504,3.377-7.496,7.524c0.008,4.144,3.369,7.496,7.51,7.496 c0.005,0,0.01,0,0.015,0l136.186-0.255c4.148-0.008,7.504-3.377,7.496-7.524c-0.008-4.144-3.369-7.496-7.51-7.496 C376.34,360.267,376.335,360.267,376.33,360.267z">
                </path>
            </g>
        </svg>
    </button>
    <!-- Modal backdrop -->
    <div class="fixed inset-0 bg-slate-900 bg-opacity-30 z-50 transition-opacity" x-show="searchOpen"
        x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-out duration-100"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" aria-hidden="true" x-cloak></div>
    <!-- Modal dialog -->
    <div id="search-modal"
        class="fixed inset-0 z-50 overflow-hidden flex items-start top-20 mb-4 justify-center px-4 sm:px-6"
        role="dialog" aria-modal="true" x-show="searchOpen" x-transition:enter="transition ease-in-out duration-200"
        x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in-out duration-200" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-4" x-cloak>
        <div class="bg-white overflow-auto max-w-2xl w-full max-h-full rounded shadow-lg"
            @click.outside="searchOpen = false" @keydown.escape.window="searchOpen = false">
            <!-- Search form -->

            <div class="py-4 px-2">

                <div class="px-2 mb-3 last:mb-0">
                    <div class="text-xs font-semibold text-slate-400 uppercase px-2 my-3 text-center">Modificar Celula
                    </div>

                    <form action="{{ route('oficiales.update', $celula->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="my-2 text-sm font-semibold  uppercase mb-2">Introduzca la nueva ubicacion</div>
                        <textarea name="ubicacion" class="h-50 w-full rounded-lg shadow-lg">{{$celula->ubicacion}}</textarea>
                        
                        <div class="my-2 text-sm font-semibold  uppercase mb-2">Introduzca el numero de telefono</div>
                        <input name="telefono" type="text"class="h-50 w-full rounded-lg shadow-lg" value="{{$celula->telefono}}" />
                        
                        <div class="my-2 text-sm font-semibold  uppercase mb-2">Seleccione el nuevo dia</div>
                        <select name="dia" class=" w-full rounded-lg shadow-lg" >
                            <div class="overflow-y-scroll">
                                <option value="1">Lunes</option>
                                <option value="2">Martes</option>
                                <option value="3">Miercoles</option>
                                <option value="4">Jueves</option>
                                <option value="5">Viernes</option>
                                <option value="6">Sabado</option>
                                <option value="7">Domingo</option>
                            </div>
                        </select>
                        <button type="submit"
                            class="actualizar disabled:opacity-40 mt-6 w-full text-center flex-1 bg-blue-500 hover:bg-blue-700 text-white hover:to-blue-500 p-2 rounded">Modificar
                            Celula</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
