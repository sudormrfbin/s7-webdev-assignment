<!-- resources/views/posting.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $posting->title }}</h1>
        <p>{{ $posting->description }}</p>
        <p><strong>Budget:</strong> ${{ $posting->budget }}</p>
        <p>
            <strong>Posted by:</strong>
            <a href="/employer/{{ $posting->employer->username }}">
                {{ $posting->employer->name }}
            </a>
        </p>
        <!-- Display other information related to the posting -->
    </div>
@endsection