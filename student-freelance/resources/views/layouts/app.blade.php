<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Freelancer Website</title>
    <!-- Add your CSS files, meta tags, and other head elements here -->
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Ensure full viewport height */
            margin: 0;
        }

        header {
            background-color: #f2f2f2;
            padding: 10px;
            display: flex;
            justify-content: flex-end;
        }

        header nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        header nav ul li {
            margin-right: 10px;
        }

        main {
            flex: 1; /* Allow content to grow */
            padding: 20px; /* Add padding around the content */
        }

        footer {
            background-color: #333;
            color: white;
            padding: 10px;
            margin-top: auto; /* Stick footer to the bottom */
            width: 100%;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/postings">Browse Jobs</a></li>
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

