<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostFavorite;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request) {


        $favoriteIds = PostFavorite::query()->where('user_ip', $request->ip())->get(['post_id'])->map(fn(PostFavorite $item) => $item->post_id);
        $posts = Post::query()->where('favorite', '1')->orWhereIn( 'id' , $favoriteIds)->get();

        return view('home.index', compact('posts'));

    }



}
