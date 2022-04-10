<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    use HasFactory, Searchable;
    protected $fillable = ['post_id', 'keyword'];

    public function searchableAs()
    {
        return 'keywords_index';
    }
}
