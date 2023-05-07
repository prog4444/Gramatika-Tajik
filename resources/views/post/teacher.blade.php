@extends('layouts.teacher')
@section('content')


<div class="container mt-2">
       
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <p>Комментариев ({{$comments->count()}})</p>
        <hr>
        <section class="comment-list " style="margin-left: 20px;">
          @foreach ($comments as $comment)
          <div class="comment-text ">
            <span class="username">
              <div style="font-weight: bold; color:chocolate">User: {{ $comment->user->name }} </div> 
           
              {{ $comment->body }}
              <span style="float:right; margin-right:10%;">{{ $comment->created_at->diffForHumans() }}</span>
            </span>
            <div><a href=" {{ route('comments', $comment->id) }} ">ответы</a></div>
            <form action="{{ route('comment.delete',$comment->id) }}" method="Post">
                
                @csrf
                @method('DELETE')
                <button type="submit" class="">Delete</button>
            </form>
           
          </div>
          @endforeach

        </section>
      
    
@endsection