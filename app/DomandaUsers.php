<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DomandaUsers extends BaseModel
{
    protected $primaryKey = 'id';
    protected $table = 'domanda_users';
    protected $fillable = array('firstname', 'lastname', 'email', 'password', 'skills', 'credit','department', 'position', 'company','project', 'image','created_at');
}
