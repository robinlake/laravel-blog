@extends('pages/layout')
@section('content')
<div class="">

<!-- <img src="{{ URL::to('/') }}/images/March26.png" alt=""> -->
<h1>Featured Posts</h1>
@if (!empty($posts))
<div class="home-grid">
<a  class="one" href="/posts/<?php echo $posts[0]->id ?>">
  <post>
    <h1 slot="title"><?php echo $posts[0]->title ?></h1>
    <p slot="description"><?php echo $posts[0]->description ?></p>
    <img slot="image" src="{{ URL::to('/') }}<?php echo $posts[0]->image_path ?>" alt="">
  </post>
</a>
<a class="two" href="/posts/<?php echo $posts[0]->id ?>">
  <post >
  <h2 slot="title"><?php echo $posts[0]->title ?></h2>
  <p slot="description"><?php echo $posts[0]->description ?></p>
  <img slot="image" src="{{ URL::to('/') }}<?php echo $posts[0]->image_path ?>" alt="">
  </post>
</a>
<a class="three" href="/posts/<?php echo $posts[0]->id ?>">
  <post >
  <h2 slot="title"><?php echo $posts[0]->title ?></h2>
  <p slot="description"><?php echo $posts[0]->description ?></p>
  <img slot="image" src="{{ URL::to('/') }}<?php echo $posts[0]->image_path ?>" alt="">
  </post>
</a>
<a class="four" href="/posts/<?php echo $posts[0]->id ?>">
  <post >
  <h2 slot="title"><?php echo $posts[0]->title ?></h2>
  <p slot="description"><?php echo $posts[0]->description ?></p>
  <img slot="image" src="{{ URL::to('/') }}<?php echo $posts[0]->image_path ?>" alt="">
  </post>
</a>
<a class="five" href="/posts/<?php echo $posts[0]->id ?>">
  <post >
  <h2 slot="title"><?php echo $posts[0]->title ?></h2>
  <p slot="description"><?php echo $posts[0]->description ?></p>
  <img slot="image" src="{{ URL::to('/') }}<?php echo $posts[0]->image_path ?>" alt="">
  </post>
</a>
</div> 
@else
<h1>Posts Coming Soon</h1>
@endif

<h1>More Posts</h1>
<div class="home-grid-2">
@foreach ($posts as $post)
<a href="/posts/{{ $post->id }}">
  <post class="">
    <h2 slot="title"><?php echo $post->title ?></h2>
    <p slot="description"><?php echo $post->description ?></p>
    <img slot="image" src="{{ URL::to('/') }}<?php echo $post->image_path ?>" alt="">
  </post>
</a>
@endforeach
</div>

<div class="more">
  <h1>Want More Posts?</h1>
  <a href="{{ route('posts') }}"><h2>See All Posts</h2></a>
</div>



</div><!-- /.blog-main -->
@endsection