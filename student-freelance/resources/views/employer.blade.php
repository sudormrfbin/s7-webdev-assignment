<!-- resources/views/employer.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        @if($employer)
            <h1>{{ $employer->name }}</h1>
            <p>{{ $employer->bio }}</p>
            <!-- Other information related to the employer can be added here -->
        @else
            <p>No employer information available.</p>
        @endif
    </div>
@endsection
