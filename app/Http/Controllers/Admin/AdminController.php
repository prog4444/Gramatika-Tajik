<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    
    public function index()
    {
       return view('post.regis');
    }

     
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admin',
            'password' => 'required|min:6',
        ]);
           
        $qwer = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        Auth::login($qwer);    
        return redirect()->to('admin/admin/show');
    }

    public function login()
    {
      return view('post.login');
    }

     
    public function login_store(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);
        $credentials = request(['email', 'password']);
        if (Auth::guard("admin")->attempt($credentials)) {
            return redirect()->to('admin/admin/show');
        }
        return redirect()->to('/posts/admin/login');;
      
    
    
    }

    
}
