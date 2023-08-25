<?php

namespace App\Models\Blog;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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


    public function scopeSearch($query, string $terms)
    {
        collect(str_getcsv($terms, '', '"'))->filter()->each(function ($term) use ($query) {
            $term = $term. "%";
            $query->whereIn('id', function ($query) use ($term) {
                $query->select('id')
                    ->from(function ($query) use ($term) {
                        $query->select('id')
                            ->from('posts')
                            ->where('title','like',$term)
                            ->orWhere('body','like',$term)
                            ->union(
                                $query->newQuery()
                                    ->select('posts.id')
                                    ->from('posts')
                                    ->join('categories', 'categories.id', '=', 'posts.category_id')
                                    ->where('categories.name','like',$term)
                            );
                    }, 'matches');
            });
        });
    }
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

        /**
     * Get the indexable data array for the model.
     *
     * @return array<string, mixed>
     */
    public function toSearchableArray(): array
    {
        $array = $this->toArray();
 
        // Customize the data array...
 
        return $array;
    }
}
