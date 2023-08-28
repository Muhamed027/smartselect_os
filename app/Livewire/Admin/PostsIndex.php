<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Blog\Post;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Illuminate\Support\Facades\View;

class PostsIndex extends Component
{
    use WithPagination;
    #[Url(keep: false)]
    public string $search = '';

    public function render()
    {
        // sleep(1);
        return View::make('livewire.admin.posts-index', [
            'posts' => Post::query()
                ->select('id', 'title', 'slug', 'excerpt', 'body', 'user_id', 'level_id', 'status_id', 'category_id', 'created_at', 'updated_at', 'published_at')
                ->with([
                    'author' => fn ($query) => $query->select('id', 'username', 'role', 'is_admin'),
                    'level' => fn ($query) => $query->select('id', 'name', 'classes'),
                    'status' => fn ($query) => $query->select('id', 'name'),
                    'category' => fn ($query) => $query->select('id', 'name', 'classes'),
                ])->when(
                    strlen($this->search) >= 2,
                    fn ($query) =>
                    $query->searchadmin($this->search)
                )->paginate(10),

        ]);
    }
}
