<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\DomandaUsers;
use App\DomandaQuestions;

class Domanda extends Controller{

    //Frontend

    public function index(){
        return view('domanda.index', array('page' => 'domanda.index'));
    }

    public function dashboard(Request $request){
        $account = $request->input('login_username');
//        $password = $request->input('login_password');
        $user = DomandaUsers::where('email', $account)->first();
        $questions = DomandaQuestions::where('owner', $user->id)->get();
        return view('domanda.dashboard', array('page' => 'domanda.dashboard',
            'user' => $user,
            'questions' => $questions));
    }

    public function profile(Request $request){
        $user_id =  $request->input('user_id');
        $user = DomandaUsers::find($user_id);
        return view('domanda.profile', array('user' => $user));
    }

//    public function profileEdit(){
//        echo 'profileEdit';
//    }

    public function question(Request $request){
        return view('domanda.question');
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