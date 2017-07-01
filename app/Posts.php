<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Posts extends BaseModel
{
    use Searchable;
    protected $primaryKey = 'id';
    protected $table = 'posts';
    protected $fillable = array('title', 'autor','category', 'article', 'segment', 'status','related','keywords', 'comments','reading_amount', "created_at", "updated_at");
}
