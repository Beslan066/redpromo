<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Post;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Post $post, Request $request)
    {
        $cities = City::query()->get();

        $posts = Post::query()
            ->when(
                $request->get('city_id'),
                function (Builder $builder, $city_id) {
                    $builder->whereIn('city_id', [$city_id]);
                }
            )
            ->get();
        return view('news.index', compact('posts', 'cities'));
    }


}
