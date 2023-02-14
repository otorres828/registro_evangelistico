<div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
    @php
        $titulo = 'Anfitrion, ' . $anfitrion
    @endphp
    <x-dashboard.welcome-banner :titulo="$titulo" />

    {{-- CELULAS OFICIALES --}}
    <h1 class="pb-2 text-xl font-semibold text-gray-500">Usted tiene {{ $cantidad }} visitas a esta celula evangelistica</h1>
    @livewire('visitas-celulas',['celula_id'=>$celula_id])

</div>
