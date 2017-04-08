<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends BaseModel
{
    protected $primaryKey = 'id';
    protected $table = 'posts';
    protected $fillable = array('title', 'autor','category', 'article', 'segment', 'keywords','image', 'comments','reading_amount');
}
