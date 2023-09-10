<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminPostController extends Controller
{
    public function index(){
        return view('admins.dashboard.blog.index');
    }
    public function create()
    {
        return view('blog.create');
    }
    public function show(Post $post){
        return view('admins.dashboard.blog.show',compact('post'));
    }

    public function edit(Post $post)
    {
        return view('blog.edit',[
            'post'=>$post,
        ]);
    }
}
