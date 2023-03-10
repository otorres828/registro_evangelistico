<div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
    @php
        $titulo = 'Hola, ' . Auth::user()->name;
    @endphp
    <x-dashboard.welcome-banner :titulo="$titulo" />


    {{-- CELULAS OFICIALES --}}
    <h1 class="pb-2 text-xl font-semibold text-gray-500">Usted tiene {{ $co }} celulas oficiales</h1>
    @livewire('celulas-oficiales')

    @if (session('celula_creada'))
        <x-dashboard.alert titulo="Exito" :mensaje="session('celula_creada')" color="green" />
    @endif
    @if (session('celula_eliminada'))
        <x-dashboard.alert titulo="Exito" :mensaje="session('celula_eliminada')" color="red" />
    @endif
</div>
