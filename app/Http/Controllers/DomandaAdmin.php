<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\DomandaUsers;
use App\DomandaQuestions;

class DomandaAdmin extends Controller{

    public function project(Request $request){
        return view('domanda.admin.project', array('page' => 'admin project'));
    }
}