<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\CommentModel;

class Post extends Model
{
    protected $table='posts';
    protected $fillable = [
        'title',
        'content',
        'is_feature'
    ];
}
