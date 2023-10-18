
<nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0">
    <div class="container">
        <a class="navbar-brand" href="{{ url('') }}/">
            <img src="{{ asset('main/images/logo.png') }}" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="ti-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ request()->is('/*') ? 'active' : ''}}">
                    <a class="nav-link" href="{{ url('') }}/">Utama</a>
                </li>
                <li class="nav-item {{ request()->is('kad-jemputan') ? 'active' : ''}}">
                    <a class="nav-link" href="{{ url('') }}/kad-jemputan">Kad Jemputan</a>
                </li>
                <li class="nav-item {{ request()->is('tutorial') ? 'active' : ''}}">
                    <a class="nav-link" href="{{ url('') }}/tutorial">Tutorial</a>
                </li>
                <li class="nav-item {{ request()->is('faq') ? 'active' : ''}}">
                    <a class="nav-link" href="{{ url('') }}/faq">FAQS</a>
                </li>
                <li class="nav-item {{ request()->is('contact') ? 'active' : ''}}">
                    <a class="nav-link" href="{{ url('') }}/contact">Hubungi Kami</a>
                </li>
                <li class="nav-item {{ request()->is('signin') ? 'active' : ''}}">
                    <a class="nav-link" href="{{ url('') }}/signin">Sign In</a>
                </li>
                <li class="nav-item {{ request()->is('signup') ? 'active' : ''}}">
                    <a class="nav-link" href="{{ url('') }}/signup">Sign Up</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
