<?php

namespace App\Models\Blog;

use App\Models\Blog\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Level extends Model
{
    use HasFactory;


    public function posts()
    {
        return self::hasMany(Post::class, 'level_id');
    }

    public  function getCount()
    {

        return Post::query()
            ->selectRaw("count(*) as all_levels")
            ->selectRaw("count(case when level_id = 1 then 1 end ) as beginner")
            ->selectRaw("count(case when level_id = 2 then 1 end ) as intermediate")
            ->selectRaw("count(case when level_id = 3 then 1 end ) as advanced")
            ->selectRaw("count(case when level_id = 4 then 1 end ) as expert")
            ->first()
            ->toArray();
    }

}
