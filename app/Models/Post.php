<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function tags(){
        return $this->belongsToMany(Tag::class,'post_tags','post_id','tag_id');
    }
}
