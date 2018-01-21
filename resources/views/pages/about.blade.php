<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Particles -->
        <script src={{asset('js/app.js')}}></script>
        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo asset('css/app.css')?>" type="text/css"> 
    </head>
    <body>
    @include ('partials/nav')
    <canvas class="particles"></canvas>
    <div class="section-one">
        <div class="left">
            <h1>Hi</h1>
            <p>I'm a web developer in Edmonton, Alberta</p>
        </div>    
        <div class="right">
            <img src="{{asset('images/March26.png')}}" alt="">
        </div>
    </div>
    <script src="https://npmcdn.com/particlesjs@2.1.0/dist/particles.min.js"></script>
    <script src={{asset('js/particles.js')}}>
        window.onload = function () {
        Particles.init({
            selector: '.particles'
        });
        };
    </script>
    </body>
</html>
