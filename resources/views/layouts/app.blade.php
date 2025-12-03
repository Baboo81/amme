<!DOCTYPE html>
<html lang="fr">

    <head>
        <link
            href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Roboto+Slab:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
            rel="stylesheet">
        @include('partials.header')
        @yield('Styles')
    </head>

    <body>
        @include('partials.nav')
        <main>
            @yield('content')
        </main>
        <footer>
            @include('partials.footer')
        </footer>
    </body>
</html>
