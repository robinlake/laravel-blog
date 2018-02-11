

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Modern Web Development</title>

    <!-- Bootstrap core CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous"> -->

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="/dist/vue-social-sharing.min.js"></script>
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>

  <body>

    @include('partials.nav')
    <div class="" id="app">
      @yield('content')    
      <!-- @include ('partials.sidebar') -->
    </div>
    @include('partials.footer')
  </body>
</html>
