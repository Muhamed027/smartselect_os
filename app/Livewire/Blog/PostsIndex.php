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
    #[Url(keep: true)]
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
                'author' => fn ($query) => $query->select('id', 'username', 'role', 'is_admin'),
                'level' => fn ($query) => $query->select('id', 'name', 'classes'),
                'category' => fn ($query) => $query->select('id', 'name', 'classes'),
            ])->when($this->level && $this->level !== 'All', function ($query) use ($levels) {
                return $query->where('level_id', $levels->get($this->level));
            })->when($this->category && $this->category !== 'All', function ($query) use ($categories) {
                return $query->where('category_id', $categories->pluck('id', 'name')->get($this->category));
            })->paginate(Post::PAGINATION_COUNT);

        if ($this->search !== "") {
            $search_result = Post::search($this->search)->get();
            $search_result_count = Post::search($this->search)->count();
        } else {
            $search_result = [];
            $search_result_count = 0;
        }
        $level_count = Post::query()
            ->selectRaw("count(*) as all_levels")
            ->selectRaw("count(case when level_id = 1 then 1 end ) as beginner")
            ->selectRaw("count(case when level_id = 2 then 1 end ) as intermediate")
            ->selectRaw("count(case when level_id = 3 then 1 end ) as advanced")
            ->selectRaw("count(case when level_id = 4 then 1 end ) as expert")
            ->first()
            ->toArray();
        return View::make('livewire.blog.posts-index', [
            'posts' => $posts,
            'search_result' => $search_result,
            'search_result_count' => $search_result_count,
            'categories' => $categories,


        ]);
    }
}
