<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Clockwork\Storage\Search;

class PostController extends Controller
{
    public function index()
    {
        $title = '';

        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' By ' . $author->name;
        }


        return view('blog', [
            "title" => "All Blog Post" . $title,
            "active" => "blog",
            // "posting" => Post::all()
            "posting" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(10)->withQueryString()
        ]);
    }

    public function tampil(Post $post)
    {
        return view('blog-post', [
            "title" => "Blog Content",
            "active" => "blog",
            "posting" => $post
        ]);
    }
}
