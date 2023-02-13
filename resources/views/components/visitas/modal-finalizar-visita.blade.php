<!-- Search button -->
<div x-data="{ searchOpen: false }">
    <!-- Button -->
    <button
        class="w-8 h-8 flex items-center justify-center bg-slate-100 hover:bg-slate-200 transition duration-150 rounded-full"
        :class="{ 'bg-slate-200': searchOpen }"
        @click.prevent="searchOpen = true;if (searchOpen) $nextTick(()=>{$refs.searchInput.focus()});"
        aria-controls="search-modal">
        <span class="sr-only">Search</span>
        <svg fill="#000000" width="64px" height="64px" viewBox="0 0 24 24" id="check-mark-circle" data-name="Flat Line" xmlns="http://www.w3.org/2000/svg" class="icon flat-line"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><rect id="secondary" x="3" y="3" width="18" height="18" rx="9" style="fill: #2ca9bc; stroke-width: 2;"></rect><polyline id="primary" points="8 11.5 11 14.5 16 9.5" style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></polyline><rect id="primary-2" data-name="primary" x="3" y="3" width="18" height="18" rx="9" style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></rect></g></svg>    </button>
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
                <!-- Recent searches -->
                <div class="px-2 mb-3 last:mb-0">
                    <form action="{{route('visitas.finalizar',$celula)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="my-2 text-xs text-center font-semibold text-slate-400 uppercase mb-2">Culminar Visita</div>
                        <p class="my-2 text-md text-black uppercase mb-2">Introduzca las observaciones o personas que asistieron a la visita</p>
                        <textarea name="" class="h-50 w-full rounded-lg shadow-lg"></textarea>
                        <button class="actualizar disabled:opacity-40 mt-2 w-full text-center flex-1 bg-blue-500 hover:bg-blue-700 text-white hover:to-blue-500 p-2 rounded">Culminar Visita</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
