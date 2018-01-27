<div class="blog-post post">
      <a href="/posts/{{ $post->id }}">
        <h2 class="title">{{ $post->title }}</h2>  
      </a>
      <p class="blog-post-meta">
        {{ $post->user->name }} on
        {{ $post->created_at->toFormattedDateString() }}
      </p>

      {{ $post->body }}

    </div><!-- /.blog-post -->

    <nav class="blog-pagination">
      <a class="btn btn-outline-primary" href="#">Older</a>
      <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>
