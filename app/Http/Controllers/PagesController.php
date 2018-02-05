<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //pages controller to display pages
    public function getIndex()
    {
        $data = array('title'=>'Page Title (Welcome Page)');
        return view('pages.welcome')->with('data',$data);
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
