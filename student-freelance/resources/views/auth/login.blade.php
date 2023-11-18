<!-- resources/views/auth/register.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <article>
        <h2>Login</h2>
        <form method="POST" action="/login">
            @csrf

            <label for="role">Role</label>
            <select name="role">
                <option value="freelancer">Freelancer</option>
                <option value="employer">Employer</option>
            </select>

            <label for="email">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
            <small><mark>{{ $message }}</mark></small>
            @enderror

            <label for="password">Password</label>
            <input type="password" name="password" required autocomplete="new-password">
            @error('password')
            <small><mark>{{ $message }}</mark></small>
            @enderror

            {{--
        <label for="password_confirmation">Confirm Password</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
        --}}

            <button type="submit">Login</button>
        </form>
    </article>
</div>
@endsection