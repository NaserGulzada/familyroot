<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PagesController extends Controller
{
    //pages controller to display pages
    public function getIndex()
    {    
        //get records from databse and send to welcome page
        $posts = Post::orderBy('created_at','desc')->limit(4)->get();
        //dd($posts);
        //dd(debug_backtrace());
        return view('pages.welcome')->withPosts($posts);
    }
    //about us
    public function getAbout()
    {
       //return view of about
       return view('pages.about');
    }
    //about us
    public function getContact()
    {
       //return view of about
       return view('pages.contact');
    }
}
