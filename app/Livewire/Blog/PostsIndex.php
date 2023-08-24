<?php

namespace App\Livewire\Blog;

use Livewire\Component;
use App\Models\Blog\Post;
use Livewire\WithPagination;
use App\Models\Blog\Category;
use Illuminate\Support\Facades\View;

class PostsIndex extends Component
{
    use WithPagination;

    public function render()
    {
        return View::make('livewire.blog.posts-index', [
            'posts' => Post::query()
                ->select('id', 'title', 'slug', 'excerpt', 'user_id', 'level_id', 'category_id', 'created_at')
                ->with([
                    'author' => fn ($query) => $query->select('id', 'username','role','is_admin'),
                    'level' => fn ($query) => $query->select('id', 'name','classes'),
                    'category' => fn ($query) => $query->select('id', 'name','classes'),
                ])
                ->latest('updated_at')
                ->paginate(Post::PAGINATION_COUNT),
            'categories'=>Category::query()
                ->select('id','name')
                ->get()
        ]);
    }
}
