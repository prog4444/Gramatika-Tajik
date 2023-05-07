@extends('layouts.main')
@section('content')


<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('posts.create') }}"> Create Post</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Номи мундарича</th>
                 
                    <th width="280px"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pro as $company)
                    <tr>
                        <td>{{ $company->id }}</td>
                        <td>{{ $company->title }}</td>
                     
                        <td>
                            <form action="{{ route('post.delete',$company->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('post.edit',$company->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    
    </div>
      
    
@endsection