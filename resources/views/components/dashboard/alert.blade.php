@props(['titulo', 'mensaje'])
<div class="w-full fixed inset-0 z-50 bg-black bg-opacity-80 flex items-center justify-center p-8" x-data="{ show: true }"
    x-show="show">
    <div class="bg-gray-50 w-full md:w-1/2 rounded-xl p-8">
        <div class="justify-center items-center">
            <h3 class="text-3xl font-bold text-gray-800">{{ $titulo }}</h3>
            <div class="mt-2 text-xl font-semibold text-black">
                {{ $mensaje }}
            </div>
            <figure>
                <img class="w-64 mx-auto pt-3"
                    src="{{asset('images/aprobado.png')}}"
                    alt="">
            </figure>
           
        </div>
        <div class="flex justify-center">
            <button
                class=" text-center mt-8 items-center px-4 py-2  border border-transparent rounded-md 
    font-semibold text-xs text-white uppercase tracking-widest bg-blue-500 hover:bg-red-700 transition ease-in-out duration-150"
                x-on:click="show=false">
                Cerrar 
            </button>

        </div>
    </div>
</div>
