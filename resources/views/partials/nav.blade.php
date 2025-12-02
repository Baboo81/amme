<!-- nav.blade.php -->

<div class="wrapper d-flex align-items-stretch">
    <!-- Sidebar -->
    <nav id="sidebar" class="js-fullheight">
        <h1>
            <a href="{{ url('/') }}" class="logo">
                <img src="{{ asset('assets/img/logo/logo.svg') }}" alt="logo" class="sidebar-logo">
            </a>
        </h1>
        <ul class="list-unstyled components mb-5">
            <li class="active">
                <a href="{{ url('/') }}"><span class="fa fa-home mx-1"></span>Accueil</a>
            </li>
            <li>
                <a href="{{ url('/about') }}"><span class="fa fa-user mx-1"></span>À propos</a>
            </li>
            <li>
                <a href="{{ url('/blog') }}"><span class="fa fa-sticky-note mx-1"></span>Services</a>
            </li>
            <li>
                <a href="{{ url('/services') }}"><span class="fa fa-cogs mx-1"></span>Outils</a>
            </li>
            <li>
                <a href="{{ url('/contact') }}"><span class="fa fa-paper-plane mx-1"></span>Contact</a>
            </li>
        </ul>
    </nav>
</div>
