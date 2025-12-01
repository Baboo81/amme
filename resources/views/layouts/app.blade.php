<!DOCTYPE html>
<html lang="fr">
    <head>
        @include('partials.header')
        @yield('Styles')
    </head>
    <body>
        <header>
            @include('partials.nav')
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            @include('partials.footer')
        </footer>
    </body>
</html>
