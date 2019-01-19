<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Post;

class Comments extends Model
{
    protected $table='comments';

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
