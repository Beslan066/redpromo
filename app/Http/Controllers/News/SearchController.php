<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request) {

        $search = $request->get('search');

        $cities =City::query()->get();
        $posts = Post::where('title', 'LIKE', "%{$search}%")->get();
        return view('news.index', compact('posts', 'cities'));
    }



}
