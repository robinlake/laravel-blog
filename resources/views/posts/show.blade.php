@extends ('layout')

@section ('content')

    <div class="col-sm-8 blog-main">
        <h1>{{ $post->title }}</h1>

        {{ $post->body }}

    <div class="comments">

        <ul class="list-group">
            @foreach ($post->comments as $comment)

            <li class="list-group-item">
                <strong>
                    {{ $comment->created_at->diffForHumans()}}: 
                </strong>
                {{ $comment->body }}
            </li>

            @endforeach
        </ul>
    </div>
    <hr>
    <div class="card">
        <div class="card-block">
            <form action="/posts/{{ $post->id }}/comments" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea name="body" id="" cols="30" rows="10" class="form-control" placeholder="Your comment here." required>

                    </textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary">Add Comment</button>
                </div>
            </form>

            @include('partials.errors')
        </div>
    </div>
    </div>

@endsection