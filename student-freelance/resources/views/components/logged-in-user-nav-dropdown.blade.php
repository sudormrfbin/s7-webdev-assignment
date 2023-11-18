@props(['user'])

<?php
if (auth('freelancer')) {
    $profileLink = '/freelancer/' . auth('freelancer')->user()->username;
} else if (auth('employer')) {
    $profileLink = '/employer/' . auth('employer')->user()->username;
}
?>

<li role="list">
    <a href="#" aria-haspopup="listbox">{{ $user->name }}</a>
    <ul role="listbox">
        {{-- <li><a>Dashboard</a></li> --}}
        <li><a href="{{ $profileLink }}">Profile</a></li>
        <li>
            <a href="/logout" style="color: var(--del-color);">Logout</a>
        </li>
    </ul>
</li>