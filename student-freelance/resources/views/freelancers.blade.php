@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>List of Freelancers</h1>
        @if(count($freelancers) > 0)
            @foreach($freelancers as $index => $freelancer)
                <div class="freelancer">
                    <h2>
                        <a href="/freelancer/{{ $freelancer->username }}">
                            {{ $freelancer->name }}
                        </a>
                    </h2>
                </div>
                @if($index !== count($freelancers) - 1)
                    <hr> <!-- Divider between employers -->
                @endif
            @endforeach
        @else
            <p>No employers available.</p>
        @endif
    </div>
@endsection
