@props(['total'])

<div class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white shadow-lg rounded-sm border border-slate-200">
    <div class="px-5 pt-5">
        <header class="flex justify-between items-start mb-2">
            <!-- Icon -->
            <img src="{{ asset('images/icon-01.svg') }}" width="32" height="32" alt="Icon 01" />
            <!-- Menu button -->
        </header>
        <div class="flex justify-between">
            <h2 class="text-lg font-semibold text-slate-800 mb-2">Celulas Totales</h2>
            <h2 class="text-3xl font-bold text-slate-800">{{$total}}</h2>
        </div>
    </div>
</div>
