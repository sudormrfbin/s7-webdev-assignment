@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $freelancer->name }}</h1>
        <p>{{ $freelancer->bio }}</p>
    </div>
@endsection
