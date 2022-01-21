<?php

namespace App\Http\Controllers\Admin\Post;




use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke(Post $post)
    {
        $posts = Post::paginate(7);
        return view('admin.post.index', compact('posts'));
    }

}
