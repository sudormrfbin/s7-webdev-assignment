@props(['footer'])

<article>
    {{ $slot }}

    @if( isset($footer) )
        <footer>
            {{ $footer }}
        </footer>
    @endif
</article>