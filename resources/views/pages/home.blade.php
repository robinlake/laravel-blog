@extends('pages/layout')
@section('content')
<div class="">

<!-- <img src="{{ URL::to('/') }}/images/March26.png" alt=""> -->


<div class="home-grid">
  <post class="one">
    <h1 slot="title"><?php echo $posts[0]->title ?></h1>
    <p slot="description"><?php echo $posts[0]->description ?></p>
    <img slot="image" src="{{ URL::to('/') }}<?php echo $posts[0]->image_path ?>" alt="">
  </post>
  <post class="two">
  <h2 slot="title"><?php echo $posts[0]->title ?></h2>
  <p slot="description"><?php echo $posts[0]->description ?></p>
  <img slot="image" src="{{ URL::to('/') }}<?php echo $posts[0]->image_path ?>" alt="">
  </post>
  <post class="three">
  <h2 slot="title"><?php echo $posts[0]->title ?></h2>
  <p slot="description"><?php echo $posts[0]->description ?></p>
  <img slot="image" src="{{ URL::to('/') }}<?php echo $posts[0]->image_path ?>" alt="">
  </post>
  <post class="four">
  <h2 slot="title"><?php echo $posts[0]->title ?></h2>
  <p slot="description"><?php echo $posts[0]->description ?></p>
  <img slot="image" src="{{ URL::to('/') }}<?php echo $posts[0]->image_path ?>" alt="">
  </post>
  <post class="five">
  <h2 slot="title"><?php echo $posts[0]->title ?></h2>
  <p slot="description"><?php echo $posts[0]->description ?></p>
  <img slot="image" src="{{ URL::to('/') }}<?php echo $posts[0]->image_path ?>" alt="">
  </post>
</div> 


<div class="home-grid-2">
  <post></post>
  <post></post>
  <post></post>
  <post></post>
  <post></post>
</div> 
@foreach ($posts as $post)
  @include('posts.post')
@endforeach

</div><!-- /.blog-main -->
@endsection