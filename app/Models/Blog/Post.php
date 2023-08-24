<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;

class Post extends Model
{
    use HasFactory;

    const PAGINATION_COUNT = 9;
    protected $guarded = [];
    /**
     * Get the category that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function getRouteKeyName()
    {
        return 'slug';
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
     * Get the author that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
