<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Keyword;
use App\Models\Post;
use App\Models\Setting;
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
        // $fakePostCount = 50;
        // \App\Models\Post::factory($fakePostCount)->create();
        // Post::create([
        //     'title' => "php developer olcam",
        //     'slug' => "java depeloder",
        //     'description' => "python developer",
        //     'category_id' => rand(1,5),
        //     'author_id' => 1,
        //     'content' => "sisharp developer",
        //     'image' => 'public/images/default-image.jpg',
        // ]);
        // $keywords = ['fake','keyword','for','hehe','technology','laravel','php','models','seeders','database','seeder','factory','eloquent','faker','lorem','ipsum','dolor','sit','amet','consectetur','adipiscing','elit','sed','do','eiusmod','tempor','incididunt','ut','labore','et','dolore','magna','aliqua','enim','ad','minim','veniam','quis','nostrud','exercitation','ullamco','laboris','nisi','ut','aliquip','ex','ea','commodo','consequat','duis','aute','irure','dolor','in','reprehenderit','in','voluptate','velit','esse','cillum','dolore','eu','fugiat','nulla','pariatur','excepteur','sint','occaecat','cupidatat','non','proident','sunt','culpa','qui','officia','deserunt','mollit','anim','id','est','laborum'];

        // for($i=0; $i<$fakePostCount; $i++){
        //     $randomNumber = rand(1,10);
        //     for($j=0; $j<$randomNumber; $j++){
        //         $keyword = new Keyword();
        //         $keyword->post_id = $i+1;
        //         $keyword->keyword = $keywords[rand(0,count($keywords)-1)];
        //         $keyword->save();
        //     }
        // }
        
        User::create(['name' => 'Metehan KIRAN', 'slug' => 'metehan-kiran', 'email' => 'admin@test.com', 'password' => '$2y$10$Audig5MmgWEfOcfDnnKQfuuHk4rARygrjsc3SqUN/FJ6avXvhcBR6']);
        Category::create(['title' => 'Language','parent_id' => 0, 'slug' => 'language']);
        Category::create(['title' => 'Travel','parent_id' => 0, 'slug' => 'travel']);
        Category::create(['title' => 'PHP','parent_id' => 1, 'slug' => 'php']);
        Category::create(['title' => 'Java','parent_id' => 1, 'slug' => 'java']);
        Category::create(['title' => 'Go','parent_id' => 1, 'slug' => 'go-lang']);
        Setting::create([
            'title' => 'Metehan Kıran - Kişisel Blog',
            'tags' => 'teknoloji,yazılım,php,laravel,web development',
            'icon' => '/imgs/website.png',
            'logo' => '/imgs/theme/logo.png',
            'address' => 'Bataklığın dibi...',
            'newsletter' => true,
            'meta_desc' => 'sdkfaskdfkasfkasdfkaskdfaskdfak',
            'footer_about'  => 'footer about',
            'user_about' => true,
            'last_comments' => true,
            'instagram' => true,
            'most_popular' => true,
            'user_id' => 1
        ]);
    }
}
