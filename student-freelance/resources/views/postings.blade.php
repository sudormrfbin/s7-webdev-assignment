<!-- resources/views/postings.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>List of Job Postings</h1>
        @if(count($postings) > 0)
            @foreach($postings as $posting)
                <article>
                    <div class="headings">
                        <h2>
                            <a href="/posting/{{ $posting->id }}"> {{ $posting->title }} </a>
                        </h2>

                        <h3>
                            <a href="/employer/{{ $posting->employer->username }}" >
                                {{ $posting->employer->name }}
                            </a>
                        </h3>
                    </div>
                    <footer>
                        {{ $posting->descriptionExcerpt(100) }}
                    </footer>
                </article>
            @endforeach
        @else
            <p>No job postings available.</p>
        @endif
    </div>
@endsection
