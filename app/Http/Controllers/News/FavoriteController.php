<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostFavorite;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function __invoke(int $id, Request $request) {

        PostFavorite::query()->firstOrCreate(['post_id' => $id, 'user_ip' => $request->ip()]);

        return redirect('/');

    }



}
