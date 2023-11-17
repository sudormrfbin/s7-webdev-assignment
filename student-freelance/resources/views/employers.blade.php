@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>List of Employers</h1>
        @if(count($employers) > 0)
            @foreach($employers as $index => $employer)
                <div class="employer">
                    <h2>
                        <a href="/employer/{{ $employer->username }}">
                            {{ $employer->name }}
                        </a>
                    </h2>
                </div>
                @if($index !== count($employers) - 1)
                    <hr> <!-- Divider between employers -->
                @endif
            @endforeach
        @else
            <p>No employers available.</p>
        @endif
    </div>
@endsection
