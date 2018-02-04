@extends ('layout')

@section ('content')




  <div class="posts">
    <h1 class="title2">All Posts</h1>

    <div class="posts-content">
        <div class="left">
        @foreach ($posts as $post)
        @include('posts.post')
      @endforeach
        </div>
        <div class="right">
            @include ('partials.sidebar')
        </div>
    </div>


  </div><!-- /.blog-main -->


@endsection