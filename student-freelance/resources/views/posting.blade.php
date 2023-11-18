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

    @if ( auth()->check() && auth()->user()->role === 'freelancer' )
        <?php
            $user = auth()->user();
            $application = $user
                ->applicationsHistory
                ->where('posting_id', $posting->id)
                ->first();
            $didApply = $application !== null;
        ?>

        <form method="POST" action="/apply">
            @csrf

            <input type="hidden" name="posting_id" value="{{ $posting->id }}" />
            <input type="hidden" name="applicant_id" value="{{ auth()->user()->id }}" />

            @if ( $didApply )
                <button type="submit">Apply</button>
            @else
                <button type="submit" disabled>Applied</button>
            @endif

        </form>
    @endif
@endsection
