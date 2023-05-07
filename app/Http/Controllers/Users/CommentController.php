<?php

namespace App\Http\Controllers\Users;


use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

     /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

     public function store(Request $request)
     {
        $request->validate([
            'body'=>'required',
        ]);
        $input = $request->all();
        $input['user_id'] = auth()->user()->id;
        $input['post_id'] = $request->id;
        Comment::create($input);
        return back();
     }


     public function comment($id)
     {
        $parent=Comment::with('user')->find($id);
        $comments = Comment::with('user')->where('parent_id',$id)->get();
        return view('users.comments', compact('parent', 'comments'));
     }


     public function store_answer(CommentRequest $request)
     {
         $arr =$request->all();
         $arr['user_id']=auth()->id();
         $arr['post_id']=3;
         unset($arr['_token']);
         $comment = Comment::create($arr);
         $request->session()->flash('status', '<strong>Успешно.</strong> Коментарие #' . $comment->id . ' добавлен');
         return redirect()->route('comments',$request->parent_id);
     }

    
}
