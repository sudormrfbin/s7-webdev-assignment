@props(['posting'])

<x-card>
    <div class="headings">
        <h2>
            <a href="/posting/{{ $posting->id }}"> {{ $posting->title }} </a>
        </h2>

        <h3>
            <a href="/user/{{ $posting->employer->username }}" >
                {{ $posting->employer->name }}
            </a>
        </h3>
    </div>

    <x-slot:footer>
        {{ $posting->descriptionExcerpt() }}
    </x-slot>
</x-card>
