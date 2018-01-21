@extends('pages/layout')
    @section('content')
    <div class="section-one">
    <canvas class="particles"></canvas>
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
    <div class="section-two">
        <h1 class="title">Work I Do</h1>
        <ul>
        <li>React</li>
        <li>Vue</li>
        <li>PHP</li>
        <li>Node.js</li>
        <li>API Development</li>
        </ul>
    </div>
@endsection