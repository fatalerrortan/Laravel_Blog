<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Domanda extends Controller{

    //Frontend

    public function index(){
        echo 'domanda';
    }

    public function profile(){
        echo 'profile';
    }

    public function profileEdit(){
        echo 'profileEdit';
    }

    public function dashboard(){
        echo 'dashboard';
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