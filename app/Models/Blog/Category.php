<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public  function getCount(){
        return Post::query()
        ->selectRaw("count(*) as all_categories")
        ->selectRaw("count(case when category_id = 1 then 1 end ) as electronics_and_gadgets")
        ->selectRaw("count(case when category_id = 2 then 1 end ) as health_and_fitness")
        ->selectRaw("count(case when category_id = 3 then 1 end ) as home_and_kitchen_appliances")
        ->selectRaw("count(case when category_id = 4 then 1 end ) as fashion_and_beauty")
        ->selectRaw("count(case when category_id = 5 then 1 end ) as travel_and_outdoor_gear")
        ->selectRaw("count(case when category_id = 6 then 1 end ) as books_and_educational_resources")
        ->selectRaw("count(case when category_id = 7 then 1 end ) as home_decor_and_furniture")
        ->selectRaw("count(case when category_id = 8 then 1 end ) as automotive_and_accessories")
        ->selectRaw("count(case when category_id = 9 then 1 end ) as sports_and_recreation")
        ->selectRaw("count(case when category_id = 10 then 1 end ) as parenting_and_baby_products")
        ->selectRaw("count(case when category_id = 11 then 1 end ) as tech_and_gadgets_accessories")
        ->selectRaw("count(case when category_id = 12 then 1 end ) as food_and_cooking_products")
        ->selectRaw("count(case when category_id = 13 then 1 end ) as personal_finance_and_investing")
        ->selectRaw("count(case when category_id = 14 then 1 end ) as business_and_entrepreneurship_tools")
        ->selectRaw("count(case when category_id = 15 then 1 end ) as pets_and_pet_supplies")
        ->selectRaw("count(case when category_id = 16 then 1 end ) as entertainment_and_gaming")
        ->selectRaw("count(case when category_id = 17 then 1 end ) as green_living_and_sustainability")
        ->selectRaw("count(case when category_id = 18 then 1 end ) as art_and_craft_supplies")
        ->selectRaw("count(case when category_id = 19 then 1 end ) as personal_development_and_self_care")
        ->selectRaw("count(case when category_id = 20 then 1 end ) as tech_tutorials_and_how_tos")
        ->first()
        ->toArray();
    }
    
}
