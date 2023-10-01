<nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0">
    <div class="container">
      <a class="navbar-brand" href="{{ url('') }}/index"><img src="{{ asset('main/images/logo.png') }}" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="ti-menu"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="{{ url('') }}/#" data-toggle="dropdown">Home
              <span><i class="ti-angle-down"></i></span>
            </a>
            <!-- Dropdown list -->
            <ul class="dropdown-menu">
              <li><a class="dropdown-item active" href="{{ url('') }}/">Homepage</a></li>
              <li><a class="dropdown-item" href="{{ url('') }}/homepage-2">Homepage 2</a></li>
              <li><a class="dropdown-item active3" href="{{ url('') }}/homepage-3">Homepage 3</a></li>
  
              <li class="dropdown dropdown-submenu dropright">
                <a class="dropdown-item dropdown-toggle" href="{{ url('') }}/#!" id="dropdown0301" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>
  
                <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                  <li><a class="dropdown-item" href="{{ url('') }}/index">Submenu 11</a></li>
                  <li><a class="dropdown-item" href="{{ url('') }}/index">Submenu 12</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown @@pages">
            <a class="nav-link dropdown-toggle" href="{{ url('') }}/#" data-toggle="dropdown">Pages
              <span><i class="ti-angle-down"></i></span>
            </a>
            <!-- Dropdown list -->
            <ul class="dropdown-menu">
              <li><a class="dropdown-item @@team" href="{{ url('') }}/team">Team</a></li>
              <li><a class="dropdown-item @@career" href="{{ url('') }}/career">Career</a></li>
              <li><a class="dropdown-item @@blog" href="{{ url('') }}/blog">Blog</a></li>
              <li><a class="dropdown-item @@blogSingle" href="{{ url('') }}/blog-single">Blog Single</a></li>
              <li><a class="dropdown-item @@privacy" href="{{ url('') }}/privacy-policy">Privacy</a></li>
              <li><a class="dropdown-item @@faq" href="{{ url('') }}/FAQ">FAQ</a></li>
              <li><a class="dropdown-item" href="{{ url('') }}/sign-in">Sign In</a></li>
              <li><a class="dropdown-item" href="{{ url('') }}/sign-up">Sign Up</a></li>
              <li><a class="dropdown-item" href="{{ url('') }}/404">404</a></li>
              <li><a class="dropdown-item" href="{{ url('') }}/comming-soon">Coming Soon</a></li>
  
              <li class="dropdown dropdown-submenu dropleft">
                <a class="dropdown-item dropdown-toggle" href="{{ url('') }}/#!" id="dropdown0501" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>
  
                <ul class="dropdown-menu" aria-labelledby="dropdown0501">
                  <li><a class="dropdown-item" href="{{ url('') }}/index">Submenu 21</a></li>
                  <li><a class="dropdown-item" href="{{ url('') }}/index">Submenu 22</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item @@about">
            <a class="nav-link" href="{{ url('') }}/about">About</a>
          </li>
          <li class="nav-item @@contact">
            <a class="nav-link" href="{{ url('') }}/contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>