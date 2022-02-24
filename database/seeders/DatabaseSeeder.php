<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
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
        \App\Models\Post::factory(55)->create();

        User::create(['name' => 'Metehan KIRAN', 'slug' => 'metehan-kiran', 'email' => 'admin@test.com', 'password' => '$2y$10$Audig5MmgWEfOcfDnnKQfuuHk4rARygrjsc3SqUN/FJ6avXvhcBR6']);

        Category::create(['title' => 'Language','parent_id' => 0, 'slug' => 'language']);
        Category::create(['title' => 'Travel','parent_id' => 0, 'slug' => 'travel']);
        Category::create(['title' => 'PHP','parent_id' => 1, 'slug' => 'php']);
        Category::create(['title' => 'Java','parent_id' => 1, 'slug' => 'java']);
        Category::create(['title' => 'Go','parent_id' => 1, 'slug' => 'go-lang']);
    }
}
