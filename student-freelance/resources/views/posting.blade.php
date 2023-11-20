<!-- resources/views/posting.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>{{ $posting->title }}</h1>
    <p>{{ $posting->description }}</p>
    <p><strong>Budget:</strong> ${{ $posting->budget }}</p>
    <p>
        <strong>Posted by:</strong>
        <a href="/user/{{ $posting->employer->username }}">
            {{ $posting->employer->name }}
        </a>
    </p>

    @if ( auth()->check() && $posting->employer_id === auth()->user()->id )
        <h3>Applicants</h3>
        <x-user-list :users="$applicants"/>
    @endif

    @if ( auth()->check() && auth()->user()->role === 'freelancer' )
        <?php
            $user = auth()->user();
            $application = $user
                ->applicationsHistory
                ->where('id', $posting->id)
                ->first();
            $didApply = $application !== null;
        ?>

        <form method="POST" action="/apply">
            @csrf

            <input type="hidden" name="posting_id" value="{{ $posting->id }}" />
            <input type="hidden" name="applicant_id" value="{{ auth()->user()->id }}" />

            @if ( $didApply )
                <button type="submit" disabled>Applied</button>
            @else
                <button type="submit">Apply</button>
            @endif

        </form>
    @endif
@endsection
