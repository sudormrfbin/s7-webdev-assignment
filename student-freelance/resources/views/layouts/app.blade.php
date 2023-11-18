<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Freelancer Website</title>
    <!-- Add your CSS files, meta tags, and other head elements here -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
    <style>
    </style>
</head>

<body>
    <!-- Header -->
    <header class="container">
        <nav>
            <ul>
                <li><a href="/">Work Freelance</a></li>
            </ul>
            <ul>
                @auth('freelancer')
                <li><a href="/postings">Browse Jobs</a></li>
                @endauth

                @guest
                <li><a href="/login" role="button" class="outline">Login</a></li>
                <li><a href="/register" role="button">Register</a></li>
                @else
                <li role="list">
                    <a href="#" aria-haspopup="listbox">{{ auth()->user()->name }}</a>
                    <ul role="listbox">
                        <li><a>Dashboard</a></li>
                        <li><a>Profile</a></li>
                        <li>
                            <a href="/logout" style="color: var(--del-color);">Logout</a>
                        </li>
                    </ul>
                </li>
                @endguest
            </ul>
        </nav>
    </header>

    <hr />

    <main class="container">
        @yield('content')
    </main>

    <hr />

    <footer class="container">
        <aside>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/employers">Employers</a></li>
                    <li><a href="/freelancers">Freelancers</a></li>
                </ul>
            </nav>
        </aside>
    </footer>

</body>