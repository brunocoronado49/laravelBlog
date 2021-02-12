<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {

        $categories = Category::all();
        $posts = Post::all();

        return view('admin.posts.index', [
            'posts' => $posts,
            'categories' => $categories
        ]);
    }

    public function store(Request $request) {
        $newPost = new Post();

        if($request->hasFile('featured')) {
            $file = $request->file('featured');
            $destination = 'images/features/';
            $fileame = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('featured')->move($destination, $fileame);
            $newPost->featured = $destination . $fileame;
        }

        $newPost->title = $request->title;
        $newPost->category_id = $request->category_id;
        $newPost->content = $request->content;
        $newPost->autor = $request->autor;
        $newPost->save();

        return redirect()->back();
    }

    public function update(Request $request, $postId) {
        $post = Post::find($postId);

        if($request->hasFile('featured')) {
            $file = $request->file('featured');
            $destination = 'images/features/';
            $fileame = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('featured')->move($destination, $fileame);
            $post->featured = $destination . $fileame;
        }

        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->content = $request->content;
        $post->autor = $request->autor;
        $post->save();

        return redirect()->back();
    }

    public function delete(Request $request, $postId) {
        $post = Post::find($postId);

        $post->delete();

        return redirect()->back();
    }
}

            