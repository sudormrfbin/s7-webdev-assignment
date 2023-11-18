@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Employers</h1>
        @if(count($employers) > 0)
            @foreach($employers as $employer)
                <x-user-card :user="$employer"/>
            @endforeach
        @else
            <p>No employers available.</p>
        @endif
    </div>
@endsection
