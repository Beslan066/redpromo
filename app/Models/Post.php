<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @property Category $category
 */

class Post extends Model
{
    use HasFactory;

    protected $guarded = false;
    protected $table = 'posts';

    protected $with = ['city', 'category'];

    public function city() {


        return $this->hasMany(Post::class, 'city_id', 'id');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }




}
