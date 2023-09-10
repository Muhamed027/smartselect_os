<?php

namespace App\Livewire\Blog;

use Livewire\Component;
use App\Models\Blog\Post;
use App\Models\Blog\Level;
use App\Models\Blog\Status;
use App\Models\Blog\Category;
use Illuminate\Http\Response;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Auth;

class CreatePost extends Component
{
    #[Rule(['required', 'min:30', 'max:150'])]
    public $title = "";

    #[Rule(['required', 'min:30', 'max:300'])]
    public  $excerpt = "";

    #[Rule(['required', 'exists:categories,id'])]
    public int $category = 1;

    #[Rule(['required', 'exists:levels,id'])]
    public int  $level = 1;

    #[Rule(['required', 'min:200'])]
    public $body = "";


    public function AddDraftPost()
    {
        if (Auth::user()->isAdmin()) {
            Post::create([
                'title' => $this->title,
                'category_id' => $this->category,
                'user_id' => Auth::user()->id,
                'level_id' => $this->level,
                'status_id' => Status::Draft,
                'excerpt' => $this->excerpt,
                'body' => $this->body,
            ]);
            return redirect(route('blog.index'));
        }
        abort(Response::HTTP_FORBIDDEN);
    }

    public function render()
    {
        return view('livewire.blog.create-post', [
            'categories' => Category::query()
                ->select('id', 'name')
                ->get(),
            'levels' => Level::query()
                ->select('id', 'name')
                ->get(),
        ]);
    }
}
