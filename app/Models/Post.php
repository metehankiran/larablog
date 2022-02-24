<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Category;
use App\Models\User;
use App\Models\Visitor;

class Post extends Model
{
    use HasFactory;
    protected $guard = [];
    protected $fillable = [
        'title', 'slug', 'category_id', 'author_id', 'content', 'keywords',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id', 'id');
    }

    public function views()
    {
        return $this->hasMany(Visitor::class)->count();
    }

}
