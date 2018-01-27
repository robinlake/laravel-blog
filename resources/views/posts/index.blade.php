@extends ('layout')

@section ('content')




  <div class="">

  @foreach ($posts as $post)
    @include('posts.post')
  @endforeach

  </div><!-- /.blog-main -->


@endsection