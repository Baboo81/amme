<!-- nav.blade.php -->

<div class="wrapper d-flex align-items-stretch">
    <!-- Sidebar -->
    <nav id="sidebar" class="js-fullheight">
        <h1>
            <a href="{{ url('/') }}" class="logo">M.</a>
        </h1>
        <ul class="list-unstyled components mb-5">
            <li class="active">
                <a href="{{ url('/') }}"><span class="fa fa-home"></span> Home</a>
            </li>
            <li>
                <a href="{{ url('/about') }}"><span class="fa fa-user"></span> About</a>
            </li>
            <li>
                <a href="{{ url('/blog') }}"><span class="fa fa-sticky-note"></span> Blog</a>
            </li>
            <li>
                <a href="{{ url('/services') }}"><span class="fa fa-cogs"></span> Services</a>
            </li>
            <li>
                <a href="{{ url('/contact') }}"><span class="fa fa-paper-plane"></span> Contact</a>
            </li>
        </ul>
    </nav>
</div>
