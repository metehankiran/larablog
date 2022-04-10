<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }

    public function tags()
    {
        $tags = explode(',',$this->tags);
        return $tags;
    }
}
