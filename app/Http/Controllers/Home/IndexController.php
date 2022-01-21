<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke() {

        $posts = Post::all()->where('favorite', '1');
        $news = Post::all();

        return view('home.index', compact('posts'));
        return view('home.news', compact('news'));
    }



}
