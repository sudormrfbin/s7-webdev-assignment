@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Freelancers</h1>
        @if(count($freelancers) > 0)
            @foreach($freelancers as $index => $freelancer)
                <article>
                    <h3>
                        <a href="/freelancer/{{ $freelancer->username }}">
                            {{ $freelancer->name }}
                        </a>
                    </h3>

                    <footer>
                        {{$freelancer->bioExcerpt()}}
                    </footer>
                </article>
            @endforeach
        @else
            <p>No employers available.</p>
        @endif
    </div>
@endsection
