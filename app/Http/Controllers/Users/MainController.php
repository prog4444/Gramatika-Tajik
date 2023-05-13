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

    public function kategotiya_ism()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 9)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 9)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function ism_shahs()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 10)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 10)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function ism_jins()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 11)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 11)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function ism_concret()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 12)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 12)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function ifodai_jinsiyat()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 13)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 13)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function ismhoi_murakkab()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 14)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 14)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function ismhoi_murakkab_payvast()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 15)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 15)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function ismhoi_murakkab_tobe()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 16)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 16)->get();
        return view('users.ism', compact('main', 'comments'));
    }

    public function kalimahoi_kutohkarda()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('post_id', 17)->orderByDesc('id', 'desc' )->paginate(25);
        $main = Posts::where('id', 17)->get();
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
