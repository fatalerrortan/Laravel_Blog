<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DomandaQuestions extends BaseModel
{
    protected $primaryKey = 'id';
    protected $table = 'domanda_questions';
    protected $fillable = array('title', 'keywords','question', 'target', 'duration', 'access','project', 'file', 'is_done', 'owner', 'contributor');
}
