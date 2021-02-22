<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Post;

/// Este controlador usa metodos para personas autenticadas
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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all();
        $posts = Post::all();

        return view('posts', [
            'categories' => $categories,
            'posts' => $posts
        ]);
    }

    public function post($postId) {
        $posts = Post::all();
        $mainPost = Post::where('id', '=', $postId)->get();
        return view('post', [
            'postId' => $postId,
            'mainPost' => $mainPost,
            'posts' => $posts,
        ]);
    }

    public function postsByCategory($category) {
        $categories = Category::all();
        $category = Category::where('name', '=', $category)->first();
        $categorySelected = $category->id;
        $posts = Post::where('category_id', '=', $categorySelected)->get();
        return view('posts', [
            'categories' => $categories,
            'posts' => $posts,
            'categorySelected' => $categorySelected
        ]);
    }
}
