@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Freelancers</h1>
        @if(count($freelancers) > 0)
            @foreach($freelancers as $index => $freelancer)
                <x-user-card :user="$freelancer"/>
            @endforeach
        @else
            <p>No employers available.</p>
        @endif
    </div>
@endsection
