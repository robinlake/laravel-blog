@extends ('layout') 
@section ('content')
<div class="col-sm-8 blog-main">
    <h1>Create A Post</h1>
    
    <hr>

    <form method="POST" action="/posts">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Title" name="title" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <input name="description" id="description" cols="30" rows="10" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" id="body" cols="30" rows="10" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="image path">Image Path</label>
            <input name="image_path" id="image_path" cols="30" rows="10" class="form-control" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Publish</button>
        </div>

        @include('partials.errors')
    </form>
</div>
@endsection