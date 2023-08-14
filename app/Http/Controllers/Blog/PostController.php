<?php

namespace App\Http\Controllers\Blog;

use App\Models\Blog\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('blog.index');
    }
    public function show(Post $post)
    {
        return view('blog.show', [
            'post' => $post,
        ]);
    }
    public function create()
    {
        return view('blog.create');
    }
}
