<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends BaseModel
{
    protected $primaryKey = 'id';
    protected $table = 'posts';
    protected $fillable = array('title', 'category', 'article', 'image', 'comments','reading_amount');
}
