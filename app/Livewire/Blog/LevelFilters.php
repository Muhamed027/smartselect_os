<?php

namespace App\Livewire\Blog;

use Livewire\Component;
use App\Models\Blog\Post;
use App\Models\Blog\Level;
use Livewire\Attributes\Url;
use App\Livewire\Blog\PostsIndex;

class LevelFilters extends Component
{
    #[Url(keep: false)]
    public $level;
    public $levelCount;


    public function mount()
    {
        $this->levelCount = Level::getCount();
        $this->level =request()->level ??'All';
        // dd($this->levelCount);
    }

    public function setLevel($newLevel)
    {
        $this->level = $newLevel;
        $this->dispatch('queryUrlUpdatedLevel', level : $this->level)->to(PostsIndex::class);
    }

    public function setActiveLevel($selectedLevel, $classes)
    {
        if ($this->level === $selectedLevel) {
            return $classes;
        }
    }
    public function render()
    {
        return view('livewire.blog.level-filters');
    }
}
