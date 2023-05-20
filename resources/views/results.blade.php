<!-- resources/views/search/results.blade.php -->
@extends('layouts.app')

@section('content')
    <h1 style="margin-top: 5%">Натиҷаи ҷустуҷӯ:</h1>

    @if($results->isEmpty())
        <p>No results found.</p>
    @else
        <ul>
            @foreach($results as $result)
                <li>{!!$result->description!!}</li>
            @endforeach
        </ul>
    {{-- {{ $results->links() }} --}}
    @endif

    <footer class="text-center text-lg-start bg-white text-muted">
  
  
        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
          © 2023 Copyright:
          <a class="text-reset fw-bold" href="#">ZB_Tojiki.tj</a>
        </div>
        <!-- Copyright -->
      </footer>
      <!-- Footer -->
                    
@endsection