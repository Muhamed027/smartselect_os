<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Blog\Post;
use App\Models\Blog\Level;
use App\Models\Blog\Status;
use App\Models\Blog\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    User::factory(1)->create([
      'username' => 'memad',
      'email' => 'memad@gmail.com',
      'is_admin' => 1,
      'role' => 'founder of <span
      class="font-bold text-blue-600 ">Savvy</span><span class="text-red-600 font-bold">Selection</span>'
    ]);

    User::factory(9)->create(['is_admin' => 1, 'role' => 'writter at  <span
    class="font-bold text-blue-600 ">Savvy</span><span class="text-red-600 font-bold">Selection</span>']);


    Category::factory()->create(['name' => 'Electronics and Gadgets', 'classes' => "border-blue-400  text-blue-400 hover:border-blue-500  hover:text-blue-500"]);
    Category::factory()->create(['name' => 'Health and Fitness', 'classes' => 'border-green-400  text-green-400 hover:border-green-500  hover:text-green-500']);
    Category::factory()->create(['name' => 'Home and Kitchen Appliances', 'classes' => 'border-indigo-400  text-indigo-400 hover:border-indigo-500  hover:text-indigo-500']);
    Category::factory()->create(['name' => 'Fashion and Beauty', 'classes' => 'border-pink-400  text-pink-400 hover:border-pink-500  hover:text-pink-500']);
    Category::factory()->create(['name' => 'Travel and Outdoor Gear', 'classes' => 'border-orange-400  text-orange-400 hover:border-orange-500  hover:text-orange-500']);
    Category::factory()->create(['name' => 'Books and Educational Resources', 'classes' => 'border-purple-400  text-purple-400 hover:border-purple-500  hover:text-purple-500']);
    Category::factory()->create(['name' => 'Home Decor and Furniture', 'classes' => 'border-rose-400  text-rose-400 hover:border-rose-500  hover:text-rose-500']);
    Category::factory()->create(['name' => 'Automotive and Accessories', 'classes' => 'border-red-400  text-red-400 hover:border-red-500  hover:text-red-500']);
    Category::factory()->create(['name' => 'Sports and Recreation', 'classes' => 'border-yellow-400  text-yellow-400 hover:border-yellow-500  hover:text-yellow-500']);
    Category::factory()->create(['name' => 'Parenting and Baby Products', 'classes' => 'border-gray-300  text-gray-300 hover:border-gray-300  hover:text-gray-300']);
    Category::factory()->create(['name' => 'Tech and Gadgets Accessories', 'classes' => 'border-cyan-400  text-cyan-400 hover:border-cyan-500  hover:text-cyan-500']);
    Category::factory()->create(['name' => 'Food and Cooking Products', 'classes' => 'border-zinc-400  text-zinc-400 hover:border-zinc-500  hover:text-zinc-500']);
    Category::factory()->create(['name' => 'Personal Finance and Investing', 'classes' => 'border-slate-400  text-slate-400 hover:border-slate-500  hover:text-slate-500']);
    Category::factory()->create(['name' => 'Business and Entrepreneurship Tools', 'classes' => 'border-neutral-400  text-neutral-400 hover:border-neutral-500  hover:text-neutral-500']);
    Category::factory()->create(['name' => 'Pets and Pet Supplies', 'classes' => 'border-stone-400  text-stone-400 hover:border-stone-500  hover:text-stone-500']);
    Category::factory()->create(['name' => 'Entertainment and Gaming', 'classes' => 'border-amber-400  text-amber-400 hover:border-amber-500  hover:text-amber-500']);
    Category::factory()->create(['name' => 'Green Living and Sustainability', 'classes' => 'border-lime-400  text-lime-400 hover:border-lime-500  hover:text-lime-500']);
    Category::factory()->create(['name' => 'Art and Craft Supplies', 'classes' => 'border-emerald-400  text-emerald-400 hover:border-emerald-500  hover:text-emerald-500']);
    Category::factory()->create(['name' => 'Personal Development and Self-Care', 'classes' => 'border-violet-400  text-violet-400 hover:border-violet-500  hover:text-violet-500']);
    Category::factory()->create(['name' => 'Tech Tutorials and How-Tos', 'classes' => 'border-Fuchsia-400  text-Fuchsia-400 hover:border-Fuchsia-500  hover:text-Fuchsia-500']);



    Status::factory()->create(['name' => 'draft', 'description' => ' can be used to indicate that the post is still in the drafting stage and not ready for public view .', 'classes' => 'bg-gray-400 dark:text-gray-100 text-white']);
    Status::factory()->create(['name' => 'pending review', 'description' => ' can be used to indicate that the post is awaiting review before it can be published.', 'classes' => 'bg-yellow-500 dark:text-gray-100 text-white']);
    Status::factory()->create(['name' => 'rejected', 'description' => 'can be used to indicate that the post has been rejected and won\'t be published.', 'classes' => 'bg-red-500 dark:text-gray-100 text-white']);
    Status::factory()->create(['name' => 'approved', 'description' => 'can be used to indicate that the post has been approved for publication.', 'classes' => 'bg-green-500 dark:text-gray-100 text-white']);
    Status::factory()->create(['name' => 'published', 'description' => 'can be used to  indicate that the post is live and visible to readers.', 'classes' => 'bg-blue-500 dark:text-gray-100 text-white']);
    Status::factory()->create(['name' => 'unpublished', 'description' => 'can be used to indicate that the post was previously published but is currently hidden.', 'classes' => 'bg-purple-500 dark:text-gray-100 text-white']);
    Status::factory()->create(['name' => 'Archived', 'description' => 'can be used to indicate that the post is stored for reference but not currently active.', 'classes' => 'bg-gray-600 dark:text-gray-100 text-white']);



    Level::factory()->create(['name' => 'begginer', 'classes' => 'border-yellow-800  text-yellow-800 ']);
    Level::factory()->create(['name' => 'advanced', 'classes' => 'border-green-800  text-green-800']);
    Level::factory()->create(['name' => 'intermediate', 'classes' => 'border-blue-800  text-blue-800']);
    Level::factory()->create(['name' => 'experts', 'classes' => 'border-orange-800  text-orange-800 ']);



    Post::factory(5)->create(['user_id' => 1]);
    foreach (range(1, 100) as $post) {
      Post::factory()->create([
        'category_id' => rand(1, 20),
        'level_id' => rand(1, 4),
        'status_id' => rand(1, 7)
      ]);
    }
  }
}
