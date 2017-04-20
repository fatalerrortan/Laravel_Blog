<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'newsletter';
    protected $fillable = array('email','created_at','updated_at');
}
