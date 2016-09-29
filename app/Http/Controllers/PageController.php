<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class PageController extends Controller
{
    public function getHome(){
        $post = Post::paginate(5);
        return view('page.home')->withPost($post);
    }

    public function getContact(){
        return view('page.contact');
    }

    public function getAbout(){
        return view('page.about');
    }


}


