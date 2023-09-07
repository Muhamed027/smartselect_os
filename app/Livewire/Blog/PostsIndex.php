<?php

namespace App\Livewire\Blog;

use Livewire\Component;
use App\Models\Blog\Post;
use App\Models\Blog\Level;
use Illuminate\Support\Str;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Models\Blog\Category;
use Illuminate\Support\Facades\View;

class PostsIndex extends Component
{
    use WithPagination;

    #[Url(keep: false)]
    public $level;
    #[Url(keep: false)]
    public $category;
    #[Url(keep: false)]
    public string $search = '';
    #[Url(keep: false)]
    public $filter;
    public $levelCount;
    public $categoryCount;

    public function mount()
    {
        $this->levelCount = (new Level)->getCount();
        $this->categoryCount = (new Category)->getCount();
        $this->level = request()->level ?? 'All';
        $this->category = request()->category ?? 'All';
        $this->search = request()->query('search') ?? "";
    }

    public function setLevel($newLevel)
    {
        $this->resetPage();
        $this->level = $newLevel;
    }
    public function updatingLevel()
    {
        $this->resetPage();
    }
    public function updatingCategory()
    {
        $this->resetPage();
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }

    #[On('search_modal_closed')]
    public function resetSearch()
    {
        $this->search = "";
    }
    public function render()
    {
        $levels = Level::all()->pluck('id', 'name');
        $categories = Category::all();
        $posts = Post::query()
            ->select('id', 'title', 'slug', 'excerpt', 'user_id', 'level_id', 'category_id', 'created_at')
            ->with([
                'author' => fn ($query) => $query->select('users.id', 'username', 'role', 'is_admin'),
                'level' => fn ($query) => $query->select('levels.id', 'name', 'classes'),
                'category' => fn ($query) => $query->select('categories.id', 'name', 'classes'),
            ])
            ->when($this->level && $this->level !== 'All', function ($query) use ($levels) {
                return $query->where('level_id', $levels->get($this->level));
            })
            ->when($this->category && $this->category !== 'All', function ($query) use ($categories) {
                return $query->where('category_id', $categories->pluck('id', 'name')->get($this->category));
            })
            ->paginate(Post::PAGINATION_COUNT);

        $search_result = $this->search !== "" ? Post::search($this->search)->get() : [];
        $search_result_count = $this->search !== "" ?  Post::search($this->search)->count() : 0;

        return View::make('livewire.blog.posts-index', [
            'posts' => $posts,
            'search_result' => $search_result,
            'search_result_count' => $search_result_count,
            'categories' => $categories,


        ]);
    }
}
