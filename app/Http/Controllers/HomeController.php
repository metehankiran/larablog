<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');

        $parentCategories = Category::where('parent_id',0)->get();
        $latestPosts = Post::orderBy('updated_at', 'desc')->paginate(4);
        $mostPopular = Post::orderBy('views', 'desc')->latest()->take(4)->get();
        view()->share('parentCategories', $parentCategories);   
        view()->share('latestPosts', $latestPosts);   
        view()->share('mostPopular', $mostPopular);   
    }
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.page.home');
    }

    public function category(Category $category)
    {
        $posts = Post::where('category_id',$category->id)->paginate(9);
        return view('frontend.page.category',['posts' => $posts, 'category' => $category]);
    }

    public function post(Post $post)
    {
        return view('frontend.page.post-singe', ['post' => $post]);
    }

    public function author(User $user)
    {
        $posts = $user->posts;
        return view('frontend.page.author', ['posts'=>$posts, 'author' => $user]);
    }
}
