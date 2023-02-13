@props(['celula'])

<div x-data="{ searchOpen: false }">
    <!-- Button -->
    <button class="w-8 h-8 flex items-center justify-center transition duration-150 rounded-full"
        :class="{ 'bg-slate-200': searchOpen }"
        @click.prevent="searchOpen = true;if (searchOpen) $nextTick(()=>{$refs.searchInput.focus()});"
        aria-controls="search-modal">
        <span class="sr-only">Search</span>
        <svg width="64px" height="64px" viewBox="0 0 1024 1024" class="icon" version="1.1"
            xmlns="http://www.w3.org/2000/svg" fill="#000000">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <path d="M724.3 198H296.1l54.1-146.6h320z" fill="#FAFCFB"></path>
                <path
                    d="M724.3 216.5H296.1c-6.1 0-11.7-3-15.2-7.9-3.5-5-4.3-11.3-2.2-17L332.8 45c2.7-7.3 9.6-12.1 17.4-12.1h320c7.7 0 14.7 4.8 17.4 12.1l54.1 146.6c2.1 5.7 1.3 12-2.2 17-3.5 4.9-9.2 7.9-15.2 7.9z m-401.6-37h375.1L657.3 69.9H363.1l-40.4 109.6z"
                    fill="#0F0F0F"></path>
                <path
                    d="M664.3 981.6H339.7c-54.2 0-98.5-43.3-99.6-97.5L223.7 235h572.9l-32.8 651.4c-2.3 53.2-46.1 95.2-99.5 95.2z"
                    fill="#9DC6AF"></path>
                <path
                    d="M664.3 995H339.7c-29.7 0-57.8-11.4-79-32.2-21.2-20.8-33.3-48.6-34-78.3L210 221.6h600.7L777.2 887c-2.6 60.5-52.2 108-112.9 108zM237.4 248.3l16 635.5c0.5 22.7 9.7 44 25.9 59.8 16.2 15.9 37.7 24.6 60.4 24.6h324.6c46.3 0 84.2-36.2 86.2-82.5l32.1-637.4H237.4z"
                    fill="#191919"></path>
                <path
                    d="M827.1 239.5H193.3c-22.2 0-40.4-18.2-40.4-40.4v-2.2c0-22.2 18.2-40.4 40.4-40.4h633.8c22.2 0 40.4 18.2 40.4 40.4v2.2c0 22.2-18.2 40.4-40.4 40.4z"
                    fill="#D39E33"></path>
                <path
                    d="M826 252.9H194.4c-30.3 0-54.9-24.6-54.9-54.9 0-30.3 24.6-54.9 54.9-54.9H826c30.3 0 54.9 24.6 54.9 54.9s-24.7 54.9-54.9 54.9z m-631.6-83.1c-15.5 0-28.2 12.6-28.2 28.2s12.6 28.2 28.2 28.2H826c15.5 0 28.2-12.6 28.2-28.2 0-15.5-12.6-28.2-28.2-28.2H194.4z"
                    fill="#111111"></path>
                <path d="M354.6 430.3v369.6" fill="#FAFCFB"></path>
                <path
                    d="M354.6 813.3c-7.4 0-13.4-6-13.4-13.4V430.3c0-7.4 6-13.4 13.4-13.4s13.4 6 13.4 13.4v369.6c-0.1 7.4-6 13.4-13.4 13.4z"
                    fill="#0F0F0F"></path>
                <path d="M458.3 430.3v369.6" fill="#FAFCFB"></path>
                <path
                    d="M458.3 813.3c-7.4 0-13.4-6-13.4-13.4V430.3c0-7.4 6-13.4 13.4-13.4s13.4 6 13.4 13.4v369.6c0 7.4-6 13.4-13.4 13.4z"
                    fill="#0F0F0F"></path>
                <path d="M562.1 430.3v369.6" fill="#FAFCFB"></path>
                <path
                    d="M562.1 813.3c-7.4 0-13.4-6-13.4-13.4V430.3c0-7.4 6-13.4 13.4-13.4s13.4 6 13.4 13.4v369.6c-0.1 7.4-6.1 13.4-13.4 13.4z"
                    fill="#0F0F0F"></path>
                <path d="M665.8 430.3v369.6" fill="#FAFCFB"></path>
                <path
                    d="M665.8 813.3c-7.4 0-13.4-6-13.4-13.4V430.3c0-7.4 6-13.4 13.4-13.4s13.4 6 13.4 13.4v369.6c0 7.4-6 13.4-13.4 13.4z"
                    fill="#0F0F0F"></path>
            </g>
        </svg> </button>

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
                    <p class="mx-7 text-xs font-semibold text-slate-400 uppercase px-2 my-3 text-center">Eliminar Visita
                    </p>
                    <div>
                        <input type="hidden" name="user_id" class="h-50 w-full rounded-lg shadow-lg"
                            value="{{ Auth::user()->id }}" />

                        <div class="my-2 text-xl text-center font-semibold  uppercase mb-2">¿Seguro que quieres eliminar
                            esta celula?</div>

                        <div class="flex justify-center px-14">
                            <form class="destroy" action="{{ route('oficiales.destroy', $celula) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="eliminando disabled:opacity-40 mr-2 mt-6  text-center  bg-blue-500 hover:bg-blue-700 text-white hover:to-blue-500 p-2 rounded">Eliminar</button>
                            </form>
                            <button @click.prevent="searchOpen = false" type="submit"
                                class=" mt-6  text-center  bg-red-500 hover:bg-red-700 text-white hover:to-red-500 p-2 rounded">Cerrar</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
