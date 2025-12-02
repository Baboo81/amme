<!DOCTYPE html>
<html lang="fr">
         @include('partials.nav')
    <body>
        <header>
           @include('partials.header')
           @yield('Styles')
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            @include('partials.footer')
        </footer>
    </body>
</html>
