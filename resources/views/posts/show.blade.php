@extends ('layout')

@section ('content')
    <div class="post">
        <div class="header">
            <h1>{{ $post->title }}</h1>
            
            <p class="">
            {{ $post->user->name }} on
            {{ $post->created_at->toFormattedDateString() }}
            </p>
        </div>

        <social-sharing class="social" url="https://vuejs.org/" inline-template>
                <div>
                    <network network="facebook">
                    <i class="fa fa-fw fa-facebook fa-2x"></i> 
                    </network>
                    <network network="googleplus">
                    <i class="fa fa-fw fa-google-plus fa-2x"></i> 
                    </network>
                    <network network="linkedin">
                    <i class="fa fa-fw fa-linkedin fa-2x"></i> 
                    </network>
                    <network network="pinterest">
                    <i class="fa fa-fw fa-pinterest fa-2x"></i> 
                    </network>
                    <network network="reddit">
                    <i class="fa fa-fw fa-reddit fa-2x"></i> 
                    </network>
                    <network network="twitter">
                    <i class="fa fa-fw fa-twitter fa-2x"></i> 
                    </network>
                </div>
            </social-sharing>

        <div class="post-content">
            <div class="left">
                <p>
                {{ $post->body }}
                </p>
            </div>
            <div class="right">
                @include ('partials.sidebar')
                
            </div>
        </div>

        <div class="comments">

            <ul class="">
                @foreach ($post->comments as $comment)

                <li class="">
                    <strong>
                        {{ $comment->created_at->diffForHumans()}}: 
                    </strong>
                    {{ $comment->body }}
                </li>

                @endforeach
            </ul>
        </div>
        <hr>
        <div class="comment-box">
            <div class="">
                <form action="/posts/{{ $post->id }}/comments" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea name="body" id="" cols="30" rows="10" class="form-control textarea" placeholder="Your comment here." required>

                        </textarea>
                    </div>

                    <div class="form-group">
                        <button class="button is-primary">Add Comment</button>
                    </div>
                </form>

                @include('partials.errors')
            </div>
        </div>
    </div>

@endsection