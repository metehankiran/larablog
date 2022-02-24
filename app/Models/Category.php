<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\Category;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'parent_id'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function parent()
    {
        return $this->hasOne(Category::class, 'id', 'parent_id');
    }

    public function subcategory()
    {
        return $this->hasMany('App\Models\Category','parent_id');
    }
}
