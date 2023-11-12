# Student Freelance Website

Made using
- Laravel
- HTML
- Tailwind CSS

## Initial Setup

Open a terminal and go to `student-freelance` folder. Then run the following
commands:

```bash
# Install dependencies
composer install --ignore-platform-reqs

# Setup sqlite
php artisan migrate
```

If there are errors with setting up sqlite, you need to enable the sqlite extension
in the system-wide php configuration file called `php.ini`.

## Run

Open a terminal and run:

```
php artisan serve
```

Open another terminal and run:

```
npm run dev
```

Then go to `http://127.0.0.1:8000`.
