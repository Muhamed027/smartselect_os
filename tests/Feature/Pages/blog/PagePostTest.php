<?php



use App\Models\User;
use App\Models\Blog\Post;
use App\Models\Blog\Level;
use App\Models\Blog\Status;
use App\Models\Blog\Category;
use function Pest\Laravel\get;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);


it('it shows the content of the post', function () {
    $user = User::factory()->create();
    $status = Status::factory()->create();
    $category = Category::factory()->create();
    $level = Level::factory()->create();
    $article = Post::factory()->create([
        'user_id' => $user->id,
        'level_id' => $level->id,
        'category_id' => $category->id,
        'status_id' => $status->id,
    ]);

    get(route('blog.show', $article))
        ->assertOk()
        ->assertSeeText([
            $article->category->name,
            $article->level->name,
            $article->title,
            $article->description,
            $article->updated_at,
            $article->created_at,

        ]);
});
