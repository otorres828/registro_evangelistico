<div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
    @php
        $titulo = 'Anfitrion, ' . $anfitrion
    @endphp
    <x-dashboard.welcome-banner :titulo="$titulo" />

    {{-- CELULAS OFICIALES --}}
    <h1 class="pb-2 text-xl font-semibold text-gray-600">Usted ha hecho {{ $cantidad }} visitas a esta Celulas Evangelisticas</h1>
    <h1 class="pb-2 text-lg font-semibold text-gray-500">Ubicacion: {{ $ubicacion }}</h1>
    @livewire('visitas-celulas',['celula_id'=>$celula_id])

</div>
