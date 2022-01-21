<?php


namespace App\Services\Post;


use App\Models\Post;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class Service
{


    public function save(FormRequest $request, Post $post) {
        $post->fill($request->validated());
        $post->save();
        return $post;
    }

}
