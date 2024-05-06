<x-layout title='series'>
    <ul>
        @foreach($series as $s)
        <li>{{ $s }}</li>
        @endforeach
    </ul>
</x-layout>