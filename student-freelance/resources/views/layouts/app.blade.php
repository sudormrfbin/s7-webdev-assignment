<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en" data-theme="light">

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

                @auth('employer')
                <li><a href="/freelancers">Hire Freelancers</a></li>
                @endauth

                @guest
                <li><a href="/login" role="button" class="outline">Login</a></li>
                <li><a href="/register" role="button">Register</a></li>
                @else
                <x-logged-in-user-nav-dropdown />
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
                    <li><a href="/postings">Postings</a></li>
                </ul>
            </nav>
        </aside>
    </footer>

</body>