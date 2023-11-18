@props(['user'])

<x-card>
    <h3>
        <a href="/user/{{ $user->username }}">
            {{ $user->name }}
        </a>
    </h3>

    <x-slot:footer>
        {{$user->bioExcerpt()}}
    </x-slot>

</x-card>

