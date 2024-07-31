<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap w/ Vite</title>

    <!-- It is used to load bootstrap resources. Please look at vite.config.js file -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  </head>
  <body>
    <header>
    </header>

    <main class="container py-4 px-3 mx-auto">
        <h1>Hello, Bootstrap and Vite!</h1>
    </main>

    <footer class="container py-4 px-3 mx-auto">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </footer>
  </body>
</html>
