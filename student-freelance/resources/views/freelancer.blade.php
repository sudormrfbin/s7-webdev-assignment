@extends('layouts.app')

@section('content')
    <h1>{{ $user->name }}</h1>
    <p>{{ $user->bio }}</p>

    @if ( auth()->check() && $user->id === auth()->user()->id )
        <h3>Your Applications</h3>
        <x-posting-list :postings="$applicationsHistory"/>
    @endif
@endsection