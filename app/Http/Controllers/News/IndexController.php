<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Post $post) {


        $posts = Post::all();
        return view('news.index', compact('posts'));
    }



}
