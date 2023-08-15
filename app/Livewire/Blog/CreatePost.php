<?php

namespace App\Livewire\Blog;

use Livewire\Component;
use App\Models\Blog\Level;
use App\Models\Blog\Status;
use App\Models\Blog\Category;
use Illuminate\Http\Response;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Auth;

class CreatePost extends Component
{
    #[Rule(['required', 'min:3'])]
    public $title = "";
    public $category = "";
    public $level = "";
    public $status;
    public $body = "";


    public function AddDraftPost()
    {
        if (Auth::user()->isAdmin()) {
            $this->validate();
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
            'statuses' => Status::query()
                ->select('id', 'name')
                ->get(),
        ]);
    }
}
