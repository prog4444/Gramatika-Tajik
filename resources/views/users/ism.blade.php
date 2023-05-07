@extends('layouts.app')
@section('content')

@foreach ($main as $post)
    
    <h5 style="text-align: center; padding:1em; color:darkorange; font-size:20px;  ">{{ $post->title }}</h5>
    <div class="text-p">{!!$post->description!!}</div>
    {{-- <p style="text-align: center;"> <img src="images/ism.png" alt="" style="width: 70%;"> </p> --}}

              
               
            <!-- Contact -->
           
                <section id="contact" class="four">
                    <div class="container">
                        <form  method="POST" action="{{ route('comments.store') }}">
                            @csrf
                            
                            <div class="row">
                                <div class="col-12">
                                    <textarea name="body" placeholder="Message" style="    min-height: 6em; border-radius: 25px;"></textarea>
                                    <input type="hidden" value="{{$post->id}}" name="id">
                                </div>
                                <div class="col-12">
                                    <input type="submit" value="Send Message" />
                                </div>
                            </div>
                        </form>
                       
                    </div>    
                </section>
              
              
            
                
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
                   
                  </div>
                  @endforeach

                </section>
           
                
              
                  
               
              
              
              

                                    <!-- Footer -->
<footer class="text-center text-lg-start bg-white text-muted">
  
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
      © 2023 Copyright:
      <a class="text-reset fw-bold" href="#">ZB_Tojiki.tj</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
                
              

        </div>
    </div>
</div>
</div>
</div>
</div>




@endforeach
@endsection