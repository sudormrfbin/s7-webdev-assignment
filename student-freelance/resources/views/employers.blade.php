@extends('layouts.app')

@section('content')
    <h1>Employers</h1>
    @if(count($employers) > 0)
        @foreach($employers as $employer)
            <x-user-card :user="$employer"/>
        @endforeach
    @else
        <p>No employers available.</p>
    @endif
@endsection
