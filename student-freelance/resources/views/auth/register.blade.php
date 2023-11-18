<!-- resources/views/auth/register.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <article>
        <h2>Register</h2>
        <form method="POST" action="/register">
            @csrf

            <label for="role">Role</label>
            <select name="role">
                <option value="freelancer">Freelancer</option>
                <option value="employer">Employer</option>
            </select>

            <label for="name">Name</label>
            <input type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
            <small><mark>{{ $message }}</mark></small>
            @enderror

            <label for="username">Username</label>
            <input type="text" name="username" value="{{ old('username') }}" required autocomplete="username">
            @error('username')
            <small><mark>{{ $message }}</mark></small>
            @enderror

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

            <button type="submit">Register</button>
        </form>
    </article>
</div>
@endsection