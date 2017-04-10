<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends BaseModel
{
    protected $primaryKey = 'id';
    protected $table = 'comments';
    protected $fillable = array('email', 'ip', 'name','comment', 'post_id');
}
