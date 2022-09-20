<form action="{{ route($route) }}" method="post">
    @csrf
    @method($method)
    <div class="mb-3">
        <label for="posts-title" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" id="posts-title" value="{{ old('title'), $post->title }}">
    </div>
    <div class="mb-3">
        <label for="posts-description" class="form-label">Description</label>
        <input type="text" class="form-control" name="content" id="posts-description" value="{{ old('content'), $post->content }}">
    </div>
    <div class="mb-3">
        <label for="posts-thumb" class="form-label">Image</label>
        <input type="text" class="form-control" name="img" id="posts-thumb" value="{{ old('img'), $post->img }}">
    </div>

    <button type="submit" class="btn btn-primary">Add</button>
</form>