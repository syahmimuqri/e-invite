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
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('') }}/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('') }}/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('') }}/contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('') }}/signin">Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('') }}/signup">Sign Up</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
