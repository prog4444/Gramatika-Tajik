@extends('layouts.main')
@section('content')
    <div>{{$post->name}}</div>
    <div>{{$post->description}}</div>
    <div><a href="{{ route('show.index') }}" class="btn btn-info mb-3">Back</a></div>
    <div>
        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-info mb-3">Edit Content</a>
    </div>

    <div>
      <form action="{{ route('post.delete', $post->id) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Delete" class="btn btn-info mb-3">
      </form>
    </div>
@endsection
