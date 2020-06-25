<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    // protected $table = 'blogposts';

    protected $fillable = ['title', 'content','store_name','wait_people','introduction',''];
}
