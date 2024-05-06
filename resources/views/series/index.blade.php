<x-layout title='Séries'>
    <ul>
        @foreach($series as $s)
        <li>{{ $s }}</li>
        @endforeach
    </ul>
</x-layout>