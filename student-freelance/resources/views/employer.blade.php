@extends('layouts.app')

@section('content')
    <h1>{{ $user->name }}</h1>
    <p>{{ $user->bio }}</p>

    @if ( auth()->check() && $user->id === auth()->user()->id )
         <h2>Your Postings</h2>
    @else
         <h2>Posting History</h2>
    @endif

    <x-posting-list :postings="$postingsHistory"/>
@endsection