<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Post;

class Visitor extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['ip','date','post_id'];

}
