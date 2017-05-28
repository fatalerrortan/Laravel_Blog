<?php
/*
 * Question status:
 * 0: scanning -> searching expert
 * 1: some one takes it -> processing
 * 2: well done -> all finish
 * 3: handover -> search next expert
 * 4: answered wait to judge (accept or hand over continue)
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\DomandaUsers;
use App\DomandaQuestions;

class Domanda extends Controller{

    //Frontend
    public $take = false;
    public function index(){
        return view('domanda.index', array('page' => 'domanda.index'));
    }

    public function dashboard(Request $request){
        $account = $request->input('login_username');
//        $password = $request->input('login_password');
        $user = DomandaUsers::where('email', $account)->first();
        if(empty($user)){
            exit('Plz use test Account (test@domanda.com)/(test2@domanda.com) and Password (test)');
        }
        if($user->position == 'Boss'){

            return view('domanda.admin.admin', array('page' => 'boss'));
        }
        $questions = DomandaQuestions::where('owner', $user->id)->get();
        $toAnswers = DomandaQuestions::where('contributor_id', $user->id)->get();

        return view('domanda.dashboard', array('page' => 'domanda.dashboard',
            'user' => $user,
            'questions' => $questions,
            'toAnswers' => $toAnswers
        ));
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
        $fileName = null;
        if ($request->hasFile('qfile')) {
            $fileTmpName = $_FILES['qfile']['tmp_name'];
            $fileName = $_FILES['qfile']['name'];
            move_uploaded_file($fileTmpName, public_path('uploads/domanda/'.$fileName));
        }
//        Log::info($fileTmpName." and ".public_path('upload/domanda/test.xml'));
        DomandaQuestions::create(array(
            'title' => $title,
            'keywords' => strtolower($keywords),
            'question' => $question,
            'target' => $target,
            'duration' => $duration,
            'access' => $access,
            'project' => $project,
            'owner' => $user_id,
            'file' => $fileName
        ));
        $question = DomandaQuestions::where('owner', $user_id)->orderBy("created_at", "desc")->first();
        if(!empty($question)){
            $this->expertLoop($question);
        }
    }

    public function expertLoop($question){
        $duration_sec = $question->duration * 60;
        $targetTag = strstr($question->keywords, ',', true);
        $experts = DomandaUsers::where('skills', 'like','%'.$targetTag.'%')->get();
        foreach ($experts as $expert){
            $question->contributor_id = $expert->id;
            $question->contributor = $expert->firstname." ".$expert->lastname;
            $question->save();
            $timer=0;
            while ($timer <= $duration_sec){
                if(DomandaQuestions::find($question->id)->status != 0){
                    break;
                }
                sleep(1);
                $timer++;
            }
            if(DomandaQuestions::find($question->id)->status == 1){
                break;
            }else{
                $newQuestion = DomandaQuestions::find($question->id);
                $newQuestion->status = 0;
                $newQuestion->save();
//                Log::info("changed ID: ". DomandaQuestions::find($question->id)->status);
                continue;
            }
        }
    }

    public function solveIt(Request $request){
        $question_id = $request->input('question_id');
        $question = DomandaQuestions::find($question_id);
        $question->status = 1;
        $question->save();
    }

    public function handOver(Request $request){
        $question_id = $request->input('question_id');
        $question = DomandaQuestions::find($question_id);
        $question->status = 3;
        $question->save();
    }

    public function answer(Request $request){
        $question_id = $request->input('question_id');
        $answer = $request->input('answer');
        $fileName = null;
        if ($request->hasFile('afile')) {
            $fileTmpName = $_FILES['afile']['tmp_name'];
            $fileName = $_FILES['afile']['name'];
            move_uploaded_file($fileTmpName, public_path('uploads/domanda/'.$fileName));
        }
        $question = DomandaQuestions::find($question_id);
        $question->answer = $answer;
        $question->file_answer = $fileName;
        $question->status = 4;
        $question->save();
    }

    public function accept(Request $request){
        $question_id = $request->input('question_id');
        $question = DomandaQuestions::find($question_id);
        $question->status = 2;
        $question->save();
    }

    public function gamification(Request $request){
        $user_id = $request->input('user_id');
        $cp = (int)$request->input('cp');
        $user = DomandaUsers::find($user_id);
        $user->credit = $user->credit + $cp;
        $user->save();
    }

    //Backend
    public function admin(){
        echo 'admin';
    }
}