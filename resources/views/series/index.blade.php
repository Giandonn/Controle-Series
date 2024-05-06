<x-layout title='Séries'>
    <a href="/series/criar">Adicionar</a>

    <ul>
        @foreach($series as $s)
        <li>{{ $s }}</li>
        @endforeach
    </ul>
</x-layout>