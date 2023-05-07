@extends('layouts.app')
@section('content')
    <ul>
        @foreach ($comments as $comment)
            <li>
                <strong>{{ $comment->user_id }}</strong>:
                {{ $comment->message }}
            </li>
        @endforeach
    </ul>
@endsection