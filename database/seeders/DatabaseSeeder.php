<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PostCategory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

         $technology = PostCategory::create([
            'name' => 'Technology',
            'slug' => 'technology'
        ]);
        $fashion = PostCategory::create([
            'name' => 'Fashion',
            'slug' => 'fashion'
        ]);
        $architecture = PostCategory::create([
            'name' => 'Architecture',
            'slug' => 'architecture'
        ]);
        $food = PostCategory::create([
            'name' => 'Food',
            'slug' => 'food'
        ]);
        $lifestyle = PostCategory::create([
            'name' => 'Lifestyle',
            'slug' => 'lifestyle'
        ]);
        $adventure = PostCategory::create([
            'name' => 'Adventure',
            'slug' => 'adventure'
        ]);
        $art = PostCategory::create([
            'name' => 'Art',
            'slug' => 'art'
        ]);
        $politics = PostCategory::create([
            'name' => 'Politics',
            'slug' => 'politics'
        ]);


    }
}
