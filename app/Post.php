<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [

        'username',
        'place',
        'content',
        'comment',
        'date',
        'like',


    ];
}
