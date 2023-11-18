@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Employers</h1>
        @if(count($employers) > 0)
            @foreach($employers as $employer)
                <article>
                    <h3>
                        <a href="/employer/{{ $employer->username }}">
                            {{ $employer->name }}
                        </a>
                    </h3>

                    <footer>
                        {{$employer->bioExcerpt()}}
                    </footer>
                </article>
            @endforeach
        @else
            <p>No employers available.</p>
        @endif
    </div>
@endsection
