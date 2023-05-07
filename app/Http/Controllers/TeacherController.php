<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        return view('post.teacher', compact('comments'));
    }

    public function delete($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return back();
        
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('teacher');
        
    }
}
