<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Freelancer Website</title>
    <!-- Add your CSS files, meta tags, and other head elements here -->
</head>

<body>
    <!-- Header -->
    <header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/jobs">Browse Jobs</a></li>
                <li><a href="/dashboard">Dashboard</a></li>
                <!-- Add more navigation links as needed -->
            </ul>
        </nav>
    </header>

    <!-- Content Section -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2023 Your Freelancer Website</p>
        <!-- Add footer content, links, etc. -->
    </footer>
</body>

</html>
