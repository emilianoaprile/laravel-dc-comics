<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <header>

        <div class="container py-1">
            <div class="row">
              <div class="col-auto me-auto">
                <h1>Comics</h1>
              </div>
              <nav class="col-auto">
                <ul class="d-flex gap-2">
                  <li>
                    <a href="{{ route('home') }}">Home</a>
                  </li>
                  <li>
                    <a href="{{ route('comics.create') }}">New comic</a>
                  </li>
              </nav>
            </div>
        </div>

    </header>

    <main class="bg-light">
        @yield('content')
    </main>

    <footer>

        FOOTER

    </footer>

</body>

</html>