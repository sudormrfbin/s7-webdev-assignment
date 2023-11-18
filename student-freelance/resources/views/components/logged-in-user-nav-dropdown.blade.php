<li role="list">
    <a href="#" aria-haspopup="listbox">{{ auth()->user()->name }}</a>
    <ul role="listbox">
        {{-- <li><a>Dashboard</a></li> --}}
        <li><a href="/user/{{ auth()->user()->username }}">Profile</a></li>
        <li>
            <a href="/logout" style="color: var(--del-color);">Logout</a>
        </li>
    </ul>
</li>