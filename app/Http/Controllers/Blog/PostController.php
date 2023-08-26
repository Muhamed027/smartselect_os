<?php

namespace App\Http\Controllers\Blog;

use App\Models\Blog\Post;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('blog.index');
    }
    public function show(Post $post)
    {
        // dd(request()->path());
        return view('blog.show', [
            'post' => $post,
            'backUrl' => URL::previous() !== URL::full() ? URL::previous() : route('blog.index')
        ]);
    }
   
}
