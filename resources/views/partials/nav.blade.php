

<header>
<nav class="navbar has-shadow">
    <div class="container">
        <div class="navbar-start">
            <a href="{{ route('home') }}" class="navbar-item">
                <img src="{{asset('images/postImages/gears.jpg')}}" alt="">
            </a>
            <a href="{{ route('posts') }}"class="navbar-item is-tab is-hidden-mobile n-l-10">Posts</a>
            <a href="{{ route('programs') }}"class="navbar-item is-tab is-hidden-mobile">Programs</a>
            <a href="{{ route('about') }}"class="navbar-item is-tab is-hidden-mobile">About</a>
        </div>
        <div class="navbar-end" style="overflow: visible;">
        <!-- <a class="navbar-item is-tab is-hidden-mobile">Share</a>
        @if (Auth::check())
          <a class="navbar-item is-tab is-hidden-mobile" href="#">{{Auth::user()->name}}</a>
        @endif -->
        </div>
    </div>
</nav>
</header>