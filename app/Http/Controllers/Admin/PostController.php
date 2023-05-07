<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('post.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'description' => 'string'

        ]);
        Posts::create($data);
        return redirect()->route('show.index');
    }

    public function show(Posts $post)
    {
        return view('post.index', compact('post'));
    }

    public function index()
    {
        $pro = Posts::all();
        return view('post.show', compact('pro'));
    }

    public function edit(Posts $post)
    {
        return view('post.edit', compact('post'));
    }

    public function update(Posts $post)
    {
       
        $data = request()->validate([
            'title' => 'string',
            'description' => 'string'

        ]);
        
        $post->update($data);
        return redirect()->route('show.index', $post->id);

    }

    public function delete( )
    {
        $post = Posts::withTrashed()->find(2);
        $post->restore();
        dd('deleted');
        
    }

    public function destroy(Posts $post)
    {
        $post->delete();
        return redirect()->route('show.index');
        
    }


  

    public function store_edit(Request $request)
    {
        $post = $request->all();
        Posts::create($post);
        return redirect('admin/show');
    }


    public function editor()
    {
        return view('post.editor');
    }

    
}
