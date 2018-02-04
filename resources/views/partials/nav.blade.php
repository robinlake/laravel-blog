<!-- <header>
      <div class="blog-masthead">
        <div class="container">
          <nav class="nav">
            <a class="nav-link active" href="#">Home</a>
            <a class="nav-link" href="#">New features</a>
            <a class="nav-link" href="#">Press</a>
            <a class="nav-link" href="#">New hires</a>
            @if (Auth::check())
              <a class="nav-link ml-auto" href="#">{{Auth::user()->name}}</a>
            @endif
          </nav>
        </div>
      </div>

      <div class="blog-header">
        <div class="container">
          <h1 class="blog-title">The Bootstrap Blog</h1>
          <p class="lead blog-description">An example blog template built with Bootstrap.</p>
        </div>
      </div>
    </header> -->

<header>
<nav class="navbar has-shadow">
    <div class="container">
        <div class="navbar-start">
            <a href="{{ route('home') }}" class="navbar-item">
                <img src="{{asset('images/March26.png')}}" alt="">
            </a>
            <a href="{{ route('posts') }}"class="navbar-item is-tab is-hidden-mobile n-l-10">Posts</a>
            <a href="{{ route('programs') }}"class="navbar-item is-tab is-hidden-mobile">Programs</a>
            <a href="{{ route('about') }}"class="navbar-item is-tab is-hidden-mobile">About</a>
        </div>
        <div class="navbar-end" style="overflow: visible;">
        <a class="navbar-item is-tab is-hidden-mobile">Share</a>
        @if (Auth::check())
          <a class="navbar-item is-tab is-hidden-mobile" href="#">{{Auth::user()->name}}</a>
        @endif
        </div>
    </div>
</nav>
</header>