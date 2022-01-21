<?php

namespace App\Http\Controllers\Admin\Post;



use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;


class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request, Post $post)
    {
        $this->service->save($request, $post);
        return redirect()->route('post.index');
    }

}
