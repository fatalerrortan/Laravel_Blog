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

    public function questionReview(Request $request){
        $question_id = $request->input('question_id');
        $question = DomandaQuestions::find($question_id);
        return view('domanda.questionReview', array('question' => $question));
    }

    public function questionPush(Request $request){
        $user_id = $request->input('user_id');
        $title = $request->input('title');
        $keywords = $request->input('keywords');
        $project = $request->input('project');
        $target = $request->input('target');
        $duration = $request->input('duration');
        $access = $request->input('access');
        $question = $request->input('question');
        $fileTmpName = $_FILES['qfile']['tmp_name'];
        $fileName = $_FILES['qfile']['name'];
        move_uploaded_file($fileTmpName, public_path('uploads/domanda/'.$fileName));
//        Log::info($fileTmpName." and ".public_path('upload/domanda/test.xml'));
        DomandaQuestions::create(array(
            'title' => $title,
            'keywords' => $keywords,
            'question' => $question,
            'target' => $target,
            'duration' => $duration,
            'access' => $access,
            'project' => $project,
            'owner' => $user_id,
            'file' => $fileName
        ));
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