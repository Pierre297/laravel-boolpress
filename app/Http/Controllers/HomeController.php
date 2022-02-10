<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Post;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createPost()
    {
        $categories = Category::all();

        return view('pages.create-post', compact('categories'));
    }

    public function storePost(Request $request)
    {

        $data = $request->validate([

            "title" => "required|string|min:6",
            "text" => "nullable|string|",
        ]);

        $post = Post::make($data);
        $category = Category::findOrFail($request->get('category'));

        $post->category()->associate($category);
        $post->save();

        return redirect()->route('posts');
    }
}
