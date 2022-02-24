<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Models\Visitor;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $parentCategories = Category::where('parent_id',0)->get();
        $latestPosts = Post::orderBy('updated_at', 'desc')->paginate(4);
        $viewCount = Visitor::select('post_id', DB::raw('count(*) as views'))->groupBy('post_id')->get();
        view()->share('parentCategories', $parentCategories);   
        view()->share('latestPosts', $latestPosts);   
        view()->share('viewCount', $viewCount);   
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
