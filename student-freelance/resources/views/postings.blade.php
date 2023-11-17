<!-- resources/views/postings.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>List of Job Postings</h1>
        @if(count($postings) > 0)
            @foreach($postings as $index => $posting)
                <div class="posting">
                    <h2>
                        <a href="/posting/{{ $posting->id }}"> {{ $posting->title }} </a>
                    </h2>
                    {{-- <p>{{ $posting->description }}</p> --}}
                    <p><strong>Posted by:</strong>  {{ $posting->employer->name }}</p>
                </div>
                @if($index !== count($postings) - 1)
                    <hr> <!-- Divider between postings -->
                @endif
            @endforeach
        @else
            <p>No job postings available.</p>
        @endif
    </div>
@endsection
