<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <x-dashboard.welcome-banner />

        @if (session('celula_creada'))
            <x-dashboard.alert titulo="Exito" :mensaje="session('celula_creada')"  />
        @endif
        @if (session('celula_eliminada'))
            <x-dashboard.alert titulo="Exito" :mensaje="session('celula_eliminada')" />
        @endif

        <div class="grid grid-cols-12 gap-6">
            {{-- CELULAS TOTALES --}}
            <x-dashboard.celulas_totales :total="$celulas_evangelisticas->count()" />

            {{-- CELULAS VISITADAS --}}
            <x-dashboard.celulas_visitadas :total="$celulas_visitadas" />

            {{-- CELULAS POR VISITAR --}}
            <x-dashboard.celulas_por_visitar :total="$por_visitar" />

            {{-- TABLA CELULAS EVANGELISTICAS --}}
            <x-dashboard.table_celulas_evangelisticas :celulas="$celulas_evangelisticas" />

            {{-- TABLA CELULAS POR VISITAR --}}
            <x-dashboard.tabla_celulas_por_visitar :celulas="$pendientes" />

        </div>
    </div>

</x-app-layout>
