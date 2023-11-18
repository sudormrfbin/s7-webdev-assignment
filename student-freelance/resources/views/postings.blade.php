<!-- resources/views/postings.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>List of Job Postings</h1>

        @if(count($postings) > 0)
            @foreach($postings as $posting)
                <x-posting-card :posting="$posting"/>
            @endforeach
        @else
            <p>No job postings available.</p>
        @endif

    </div>
@endsection
