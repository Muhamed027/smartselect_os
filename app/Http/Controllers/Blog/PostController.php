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
            'posts' => Post::query()
            ->select('id', 'title', 'slug', 'excerpt', 'user_id', 'level_id', 'category_id', 'created_at')
            ->with([
                'author' => fn ($query) => $query->select('id', 'username', 'role', 'is_admin'),
                'level' => fn ($query) => $query->select('id', 'name', 'classes'),
                'category' => fn ($query) => $query->select('id', 'name', 'classes'),
            ])
            ->paginate(Post::PAGINATION_COUNT),
            'post' => $post,
            'backUrl' => URL::previous() !== URL::full() ? URL::previous() : route('blog.index')
        ]);
    }
   
}
