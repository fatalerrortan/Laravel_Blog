<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DomandaQuestions extends BaseModel
{
    protected $primaryKey = 'id';
    protected $table = 'domanda_questions';
    protected $fillable = array('title', 'keywords','question', 'target', 'duration',
        'access','project', 'file', 'file_answer','status', 'owner', 'contributor',
        'contributor_id', 'answer','created_at','updated_at');
}
