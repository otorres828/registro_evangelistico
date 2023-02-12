<div>
    <x-dashboard.welcome-banner />

    @if (session('celula_creada'))
        <x-dashboard.alert titulo="Exito" :mensaje="session('celula_creada')" color="green" />
    @endif
    @if (session('celula_eliminada'))
        <x-dashboard.alert titulo="Exito" :mensaje="session('celula_eliminada')" color="red" />
    @endif

    <div class="grid grid-cols-12 gap-6">
        {{-- CELULAS TOTALES --}}
        <x-dashboard.celulas_totales :total="$ce->count()" />

        {{-- CELULAS VISITADAS --}}
        <x-dashboard.celulas_visitadas :total="$cv" />

        {{-- CELULAS POR VISITAR --}}
        <x-dashboard.celulas_por_visitar :total="$pv" />

        {{ $slot }}

    </div>
</div>
