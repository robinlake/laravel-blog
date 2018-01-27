<?php

namespace App\Http\Controllers;

use App\Post;
use App\Repositories\Posts;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function About()
    {
        return view('pages/about');
    }

    public function Home(Posts $posts)
    {
        //dd($posts);
        $posts = $posts->all();
        if(request(['month', 'year'])){
            $posts = Post::latest()
            ->filter(request(['month', 'year']))
            ->get();
        } else {
            $posts = Post::latest()->get();
        }

        return view('pages.home', compact('posts'));
    }

    public function Programs()
    {
        return view('pages/programs/programs');
    }
}
