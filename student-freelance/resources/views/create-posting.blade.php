@extends('layouts.app')

@section('content')
<div class="container">
    <article>
        <h2>Create Job Posting</h2>
        <form method="POST" action="/posting">
            @csrf

            <label for="title">Title</label>
            <input type="text" name="title" value="{{ old('title') }}" required autofocus>
            @error('title')
            <small><mark>{{ $message }}</mark></small>
            @enderror

            <label for="description">Description</label>
            <textarea name="description" required>
                {{ old('description') }}
            </textarea>
            @error('description')
            <small><mark>{{ $message }}</mark></small>
            @enderror

            <label for="budget">Budget</label>
            <input type="number" min="0" name="budget" value="{{ old('budget') }}" required>
            @error('budget')
            <small><mark>{{ $message }}</mark></small>
            @enderror

            {{--
        <label for="password_confirmation">Confirm Password</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
        --}}

            <button type="submit">Create</button>
        </form>
    </article>
</div>
@endsection