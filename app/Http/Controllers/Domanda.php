<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\DomandaUsers;

class Domanda extends Controller{

    //Frontend

    public function index(){
        return view('domanda.index', array('page' => 'domanda.index'));
    }

    public function dashboard(Request $request){
        $user = DomandaUsers::find(1);
        echo $user->email;
        return view('domanda.dashboard', array('page' => 'domanda.dashboard'));
    }

    public function profile(){
        echo 'profile';
    }

    public function profileEdit(){
        echo 'profileEdit';
    }

    public function question(){
        echo 'question';
    }

    public function questionPush(){
        echo 'questionPush';
    }

    public function answer(){
        echo 'answer';
    }

    public function answerPush(){
        echo 'answerPush';
    }

    public function cancle(){
        echo 'cancle';
    }

    //Backend
    public function admin(){
        echo 'admin';
    }
}