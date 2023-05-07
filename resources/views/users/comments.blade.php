@extends('layouts.app')
@section('content')


<!-- Comments -->
<p>Ответы ({{$comments->count()}})</p>
<hr>
<section class="comment-list " style="margin-left: 20px;">
  @foreach ($comments as $comment)
  <div class="comment-text ">
    <span class="username">
      <div style="font-weight: bold; color:chocolate">User: {{ $comment->user->name }} </div> 
   
      {{ $comment->body }}
      <span style="float:right; margin-right:10%;">{{ $comment->created_at->diffForHumans() }}</span>
    </span>
  </div>
  @endforeach

</section>

            <!-- Contact -->
           
                <section id="contact" class="four">
                    <div class="container">
                        <form  method="POST" action="{{ route('store.answer') }}" accept-charset="utf-8" enctype="multipart/form-data">
                            @csrf
                            <input name="parent_id" hidden value="{{$parent->id}}">
                            {{-- <input type="hidden" value="{{$post->id}}" name="id"> --}}
                            <div class="row">
                                <div class="col-12">
                                    <textarea name="body" placeholder="Message" style="    min-height: 6em; border-radius: 25px;"></textarea>
                                    {{-- <input type="hidden" value="{{$post->id}}" name="id"> --}}
                                </div>
                                <div class="col-12">
                                    <input type="submit" value="Send Message" />
                                </div>
                            </div>
                        </form>
                       
                    </div>    
                </section>
              
              
            
{{--                 
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
                    <div><a href="#">ответы</a></div>
                   
                  </div>
                  @endforeach

                </section> --}}
           
                
              
                  
               
              
              
              

                                    
                
              

        </div>
    </div>
</div>
</div>
</div>
</div>





@endsection