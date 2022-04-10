<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Category;
use App\Models\User;
use App\Models\Visitor;
use Laravel\Scout\Searchable;
class Post extends Model
{
    use HasFactory, Searchable;
    protected $guard = [];
    protected $guarded = [];
    protected $fillable = [
        'title', 'slug', 'category_id', 'author_id', 'content', 'keywords',
    ];


    public function searchableAs()
    {
        return 'posts_index';
    }

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
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function keywords()
    {
        return $this->hasMany(Keyword::class);
    }
}
