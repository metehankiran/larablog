<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use App\Models\Visitor;
use App\Models\Setting;
use Cookie;
use Illuminate\Support\Facades\DB;
class   HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $comments = Comment::get();
        $parentCategories = Category::where('parent_id',0)->get();
        $latestPosts = Post::orderBy('updated_at', 'desc')->paginate(4);
        $viewCount = Visitor::select('post_id', DB::raw('count(*) as views'))->groupBy('post_id')->get();
        $randomCategories = Category::inRandomOrder()->get();
        $posts = Post::all();
        view()->share('posts', $posts);   
        view()->share('parentCategories', $parentCategories);   
        view()->share('latestPosts', $latestPosts);   
        view()->share('viewCount', $viewCount);   
        view()->share('randomCategories', $randomCategories);   
        view()->share('comments', $comments);   
        view()->share('setting', Setting::first());
    }
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cookie = cookie('subscribe','deneme cookie',60*24*30);
        $cookie2 = cookie('subscribe2','deneme22',60*24*30);
        Cookie::queue($cookie);
        Cookie::queue($cookie2);
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

    public function suggestedPost(Request $request, $perPage = 3)
    {
        $post = Post::find($request->post_id);
        $keywords = $post->keywords()->pluck('keyword');
        $posts = Post::get();
        $suggestedPosts = array();
        foreach($posts as $p){
            $postKeywords = $p->keywords()->pluck('keyword');
            $counter = 0;
            $i = 0;
            foreach($keywords as $keyword){
                if(in_array($keyword,$postKeywords->toArray())){
                    $counter++;
                        array_push($suggestedPosts,$p);
                        $p['similarity'] = $counter;
                    }
                    $i++;
                }
            }

        $suggestedPosts = array_unique($suggestedPosts);
        $suggestedPosts = collect($suggestedPosts);
        $suggestedPosts = $suggestedPosts->sortBy('similarity')->reverse();
        $view = view('frontend.component.suggested-post.suggested-post', ['suggestedPosts' => $suggestedPosts->forPage($request->page,$perPage)])->render();
        $rightMenu = view('frontend.component.suggested-post.suggested-post-right', ['suggestedPosts' => $suggestedPosts->forPage($request->page,$perPage)])->render();
        return response()->json(['html' => $view, 'rightMenu' => $rightMenu]); 
    }

}
