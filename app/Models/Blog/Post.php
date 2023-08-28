<?php

namespace App\Models\Blog;

use App\Models\User;
use App\Models\Blog\Status;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, Sluggable;

    const PAGINATION_COUNT = 9;
    protected $guarded = [];

    public function scopeSearch($query, string $terms)
    {
        collect(str_getcsv($terms, '', '"'))->filter()->each(function ($term) use ($query) {
            $term = "%" . $term . "%";
            $query->whereIn('id', function ($query) use ($term) {
                $query->select('id')
                    ->from(function ($query) use ($term) {
                        $query->select('id')
                            ->from('posts')
                            ->where('title', 'like', $term)
                            ->orWhere('body', 'like', $term)
                            ->orWhere('excerpt','like',$term)
                            ->union(
                                $query->newQuery()
                                    ->select('posts.id')
                                    ->from('posts')
                                    ->join('categories', 'categories.id', '=', 'posts.category_id')
                                    ->where('categories.name', 'like', $term)
                            )->union(
                                $query->newQuery()
                                    ->select('posts.id')
                                    ->from('posts')
                                    ->join('levels', 'levels.id', '=', 'posts.level_id')
                                    ->where('levels.name', 'like', $term)
                            );
                    }, 'matches');
            });
        });
    }
    public function scopeSearchadmin($query, string $terms)
    {
        collect(str_getcsv($terms, '', '"'))->filter()->each(function ($term) use ($query) {
            $term = "%" . $term . "%";
            $query->whereIn('id', function ($query) use ($term) {
                $query->select('id')
                    ->from(function ($query) use ($term) {
                        $query->select('id')
                            ->from('posts')
                            ->where('title', 'like', $term)
                            ->orWhere('body', 'like', $term)
                            ->orWhere('excerpt','like',$term)
                            ->union(
                                $query->newQuery()
                                    ->select('posts.id')
                                    ->from('posts')
                                    ->join('categories', 'categories.id', '=', 'posts.category_id')
                                    ->where('categories.name', 'like', $term)
                            )->union(
                                $query->newQuery()
                                    ->select('posts.id')
                                    ->from('posts')
                                    ->join('statuses', 'statuses.id', '=', 'posts.status_id')
                                    ->where('statuses.name', 'like', $term)
                            )->
                            union(
                                $query->newQuery()
                                    ->select('posts.id')
                                    ->from('posts')
                                    ->join('levels', 'levels.id', '=', 'posts.level_id')
                                    ->where('levels.name', 'like', $term)
                            );
                    }, 'matches');
            });
        });
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function isActive()
    {
        return !!(request()->path() === "blog/posts/{$this->slug}");
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    /**
     * Get the level that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function level(): BelongsTo
    {
        return $this->belongsTo(Level::class, 'level_id');
    }
    /**
     * Get the statusé that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class, 'status_id');
    }
    public function getStatusColorAttribute()
    {
        return [
            '1' => 'gray',
            '2' => 'red',
            '3' => 'green',
            '4' => 'blue',
            '5' => 'orange',
            '6' => 'slate',
        ][$this->status_id] ?? 'gray';
    }
    /**
     * Get the author that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
