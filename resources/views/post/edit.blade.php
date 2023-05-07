@extends('layouts.main')
@section('content')

<form action="{{ route('post.update', $post->id) }}" method="post">
    @csrf
    @method('patch')
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" class="form-control"  placeholder="Title" value="{{ $post->title }}">
  </div>
  <div class="mb-3">
    <label for="title" class="form-label">Content</label>
    <input type="text" name="content" class="form-control"  placeholder="Content" value="{{ $post->content }}">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea class="form-control" name="description" id="summernote" >{!!$post->description!!}</textarea>

  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>


@endsection


