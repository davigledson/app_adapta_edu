<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            
            <a href="{{ route('home.index') }}">Pagina Inicial</a>
        </h2>
    </x-slot>

    @yield('conteudo')

    
    
</x-app-layout>