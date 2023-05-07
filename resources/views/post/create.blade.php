@extends('layouts.main')
@section('content')

<form action="{{ route('post.store') }}" method="post">
    @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Title">
  </div>

  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea class="form-control" name="description" id="summernote" placeholder="Text"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>


@endsection


