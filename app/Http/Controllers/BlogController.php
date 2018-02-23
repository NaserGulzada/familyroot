<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class BlogController extends Controller
{
    /**
     * @desc: Get all index with pagination
     */
    public function getIndex()
    {
        $posts = Post::orderBy('created_at')->paginate(3);
        return view('blog.index')->withPosts($posts);

    }
    //get single blog with its slug
    public function getSingle($slug)
    {
       $post = Post::where('slug','=',$slug)->first();
       return view('blog.single')->withPost($post); 
    }
}

