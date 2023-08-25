<?php

namespace App\Livewire\Blog;

use Livewire\Component;
use App\Models\Blog\Post;
use App\Models\Blog\Level;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Models\Blog\Category;
use Illuminate\Support\Facades\View;

class PostsIndex extends Component
{
    use WithPagination;

    #[Url(keep: false)]
    public $level;
    #[Url(keep: true)]
    public $category;
    #[Url(keep: false)]
    public string $search;
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
        $this->search = request()->query('search') ?? '';
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

    // #[On('queryUrlUpdatedLevel')]
    public function render()
    {
        $levels = Level::all()->pluck('id', 'name');
        $categories = Category::all()->pluck('id', 'name');
        return View::make('livewire.blog.posts-index', [
            'posts' => Post::query()
                ->select('id', 'title', 'slug', 'excerpt', 'user_id', 'level_id', 'category_id', 'created_at')
                ->with([
                    'author' => fn ($query) => $query->select('id', 'username', 'role', 'is_admin'),
                    'level' => fn ($query) => $query->select('id', 'name', 'classes'),
                    'category' => fn ($query) => $query->select('id', 'name', 'classes'),
                ])->when($this->level && $this->level !== 'All', function ($query) use ($levels) {
                    return $query->where('level_id', $levels->get($this->level));
                })->when($this->category && $this->category !== 'All', function ($query) use ($categories) {
                    return $query->where('category_id', $categories->get($this->category));
                })->when($this->filter && $this->filter === "Recently Posted", fn ($query) => $query
                    ->select('id', 'title', 'slug', 'excerpt', 'user_id', 'level_id', 'category_id', 'created_at')
                    ->with([
                        'author' => fn ($query) => $query->select('id', 'username', 'role', 'is_admin'),
                        'level' => fn ($query) => $query->select('id', 'name', 'classes'),
                        'category' => fn ($query) => $query->select('id', 'name', 'classes'),
                    ])->orderBy('updated_at', 'desc')->paginate(9))
                ->when(
                    strlen($this->search) >= 2,
                    fn ($query) =>
                    $query->search($this->search)
                )
                ->paginate(9),
            'categories' => Category::query()
                ->select('id', 'name')
                ->get()
        ]);
    }
}
