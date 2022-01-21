<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class ShowController extends Controller
{

        public function __invoke(Post $post) {

            $posts = Post::query()->where('category_id', $post->category->id)->get();
            return view('home.show', compact('post', 'posts'));
        }





}
