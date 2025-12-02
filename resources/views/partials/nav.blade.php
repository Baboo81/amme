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
            @foreach ( navData() as $item)
            <li class="{{ request()->is($item['url']) ? 'active' : '' }}">
                <a href="{{ $item['url'] }}">
                    <span class="{{ $item['icon'] }}"></span>
                    {{ $item['title'] }}
                </a>
            </li>
            @endforeach
        </ul>
    </nav>
</div>
