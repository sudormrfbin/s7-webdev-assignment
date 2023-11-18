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
                <li><a href="/postings">Browse Jobs</a></li>
            </ul>
        </nav>
    </header>

    <hr/>

    <!-- Content Section -->
    <main class="container">
        @yield('content')
    </main>

    <hr/>

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

