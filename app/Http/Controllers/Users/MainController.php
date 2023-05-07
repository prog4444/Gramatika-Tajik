<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Posts;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function ism()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 3)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 3)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function sifat()
    {
        $comments = Comment::where('post_id', 1)->orderByDesc('id', 'desc' )->get();
        $main = Posts::where('id', 1)->get();
        return view('users.ism', compact('main', 'comments'));
        
    }

    public function morfologiya()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 6)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 6)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function hissahoi()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 7)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 7)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function jumlai_murakkab()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 8)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 8)->get();
        return view('users.ism', compact('main', 'comments'));
    }
     

    
   

 
    
}
