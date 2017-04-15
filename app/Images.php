<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends BaseModel
{
    protected $primaryKey = 'id';
    protected $table = 'images';
    protected $fillable = array('name', 'post_id','image');
}
