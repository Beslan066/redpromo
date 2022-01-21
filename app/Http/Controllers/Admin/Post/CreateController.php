<?php

namespace App\Http\Controllers\Admin\Post;



use App\Models\Category;
use App\Models\Post;
use App\Http\Controllers\Controller;

class CreateController extends BaseController
{
    public function __invoke(Post $post)
    {
        $categories = Category::all();

        return view('admin.post.create', compact( 'categories'));
    }

}
