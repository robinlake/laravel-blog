<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DevMarketer</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar has-shadow">
            <div class="container">
                <div class="navbar-start">
                    <a href="" class="navbar-item">
                        <img src="{{asset('images/github-clear.png')}}" alt="">
                    </a>
                    <a class="navbar-item is-tab is-hidden-mobile n-l-10">Learn</a>
                    <a class="navbar-item is-tab is-hidden-mobile">Discuss</a>
                    <a class="navbar-item is-tab is-hidden-mobile">Share</a>
                </div>
                <div class="navbar-end" style="overflow: visible;">
                    @if (!Auth::guest())
                    <a href="" class="navbar-item is-tab">Login</a>
                    <a href="" class="navbar-item is-tab">Join the Community</a>
                    @else
                        <button class="dropdown is-aligned-right navbar-item is-tab">
                            Hey Alex <span class="icon"><i class="fa fa-caret-down"></i></span>

                            <ul class="dropdown-menu">
                                <li>
                                    <a class="navbar-item" href="#"><span class="icon"><i class="fa fa-fw m-r-10 fa-user-circle-o"></i></span>Profile</a>
                                    <a class="navbar-item" href="#"><span class="icon"><i class="fa fa-fw m-r-10 fa-bell"></i></span>Notifications</a>
                                    <a class="navbar-item" href="#"><span class="icon"><i class="fa fa-fw m-r-10 fa-cog"></i></span>Settings</a>
                                    <a class="navbar-item seperator" href="#"></a>
                                    <a class="navbar-item" href="#"><span class="icon"><i class="fa fa-fw m-r-10 fa-sign-out"></i></span>Logout</a>
                                </li>
                            </ul>
                        </button>
                    @endif
                </div>
            </div>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
