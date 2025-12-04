<!-- Btn toggle sidebar -->
<button id="sidebarCollapse" class="btn btn-primary toggle-btn">
    <i class="bi bi-list"></i>
</button>

<div class="wrapper d-flex align-items-stretch">
    <!-- Sidebar -->
    <nav id="sidebar" class="js-fullheight">
        <a href="{{ url('/') }}" class="logo mx-3">
            <img src="{{ asset('assets/img/logo/logo.svg') }}" alt="logo" class="sidebar-logo">
        </a>
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
