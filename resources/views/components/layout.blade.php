<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- We may inject a custom title from our custom pages; otherwise, a default title is shown -->
    <!-- site_title comes from custom pages and $SITE_TITLE comes from AppServiceProvider -->
    <title>{{ $site_title ?? $SITE_TITLE }}</title>

    <!-- It is used to load bootstrap resources. Please look at vite.config.js file -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  </head>
  <body>
    <!-- WE have created a custo Header. Please have a look at: https://getbootstrap.com/docs/5.3/examples/ -->
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                <svg class="bi" width="85" height="64" role="img" aria-label="Bootstrap">
                    <use xlink:href="#svn-logo"></use>
                </svg>
                </a>
            </div>
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
                <li><a href="#" class="nav-link px-2">About</a></li>
            </ul>
            <div class="col-md-3 text-end">
                <button type="button" class="btn btn-outline-primary me-2">Login</button>
                <button type="button" class="btn btn-primary">Sign-up</button>
            </div>
        </header>
    </div>

    <main class="container py-4 px-3 mx-auto">
        <!-- Content that is injected into a component will be supplied to the default $slot variable -->
        {{ $slot }}
    </main>

    <footer class="container py-4 px-3 mx-auto">
        <!-- $ECOMMERCE_VERSION comes from AppServiceProvider -->
        Ecommerce <strong>v{{ $ECOMMERCE_VERSION }}</strong> -
        Laravel <strong>v{{ Illuminate\Foundation\Application::VERSION }}</strong> -
        PHP <strong>v{{ PHP_VERSION }}</strong>
    </footer>

    <!-- includes folder has all the sections part used to create the layout -->
    @include('includes/svn-logo')
  </body>
</html>
