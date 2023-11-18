<!-- resources/views/postings.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>List of Job Postings</h1>

        <x-posting-list :postings="$postings"/>

    </div>
@endsection
