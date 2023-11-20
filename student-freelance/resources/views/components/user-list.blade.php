@props(['users'])

@if(count($users) > 0)
    @foreach($users as $user)
        <x-user-card :user="$user"/>
    @endforeach
@else
    <p>No users available.</p>
@endif
