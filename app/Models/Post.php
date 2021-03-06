<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded;

    function User(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function path(){
        return (route('posts.show',$this));
    }
}


