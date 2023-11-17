<!-- resources/views/employer.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $employer->name }}</h1>
        <p>{{ $employer->bio }}</p>
    </div>
@endsection
