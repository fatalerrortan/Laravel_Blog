<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Images;
use App\Comments;
use App\User as Users;
//get user client ip
use Illuminate\Support\Facades\Request as IpRequest;
//event trigger
use App\Events\EmailTrigger;
// class for email driver
use App\Mail\SiteReview;
use App\Mail\ContactMe;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class Front extends Controller
{
    public function index(){
/*
 * Use Event Listener pattern to send email
 * $user = new User();
 *      $user->user_ip = IpRequest::ip();
 *      event(new EmailTrigger($user));
 */
//        Mail::to("tiemann9898@gmail.com")->send(new SiteReview(IpRequest::ip()));
        $posts = Posts::orderBy('updated_at', 'desc')->take(5)->get();
        return view('home', array('page' => 'Xulin, Tan, Xtan, Study Blog, home', 'posts' => $posts));
    }

    public function contact(Request $request){
        if ($request->isMethod('post')){
//            NOT allow to use "message" als keyword (pre defined)
            $contact = array(
                "name" => (string)$request->input('name'),
//                "email" => str_replace("@", "(AT)", $request->input('email')),
                "email" => $request->input('email'),
                "contact_message" => $request->input('contact_message')
            );
//            Log::info($contact['name']." and ".$contact['email']." and ".$contact['message']);
            Mail::to("tiemann9898@gmail.com")->send(new ContactMe($contact));
        }
    }

    public function getImage($post_id){
        $images = Images::where('post_id', $post_id)->get();
        foreach ($images as $image){
            return $image['image'];
        }
    }

    public function post($post_id){
        $post = Posts::find($post_id);
        $post->reading_amount = $post->reading_amount + 1;
        $post->save();
        $image = $this->getImage($post_id);
        $comments = Comments::where("post_id", $post_id)->orderBy("updated_at", "asc")->get();
        $related_posts = Posts::where('related', 'like','%,'.$post_id.',%')->get();
        return view('post', array('page' => 'Xulin, Xulin Tan, Xtan, '.$post['keywords'], 'post' => $post, 'image' => $image, 'comments' => $comments, 'related_posts' => $related_posts));
    }

    public function posts($category){
        $posts = Posts::where('category', 'like', $category.'%')->orderBy('updated_at', 'desc')->take(9)->get();
        return view('posts', array('page' =>  'Xulin, Xulin Tan, Xtan, '. $category, 'posts' => $posts, 'category' => strtoupper($category)));
    }

    public function more(Request $request){
        if ($request->isMethod('post')){
            $last_item_date = $request->input('last_item_date');
            if(!empty($request->input('category'))){
                $html = $this->getHtml(Posts::where('category', 'like', $request->input('category').'%')->where('updated_at', '<', $last_item_date)->orderBy('updated_at', 'desc')->take(9)->get(), true);
            }else{
                $html = $this->getHtml(Posts::where('updated_at', '<', $last_item_date)->orderBy('updated_at', 'desc')->take(5)->get());
            }
            return $html;
        }
    }

    public function getHtml($posts, $flag = false){
        $html = '';
        if($flag){
            foreach ($posts as $post){
                $html .= "<div class='post-preview'>
                    <a class='post_id' href='https://".$_SERVER['HTTP_HOST']."/post/".$post['id']."'>
                        <h5>
                          ".$post['title']."
                        </h2>
                    </a>
                    <p class='post-meta'>Posted by <a href='#'>".$post['autor']."</a> <span class='updated_at'>".$post['updated_at']."</span>
                    <span class='keywords'>Keywords: ".$this->keywords($post['keywords'])."</span>
                    </p>
                </div>
                <hr>";
            }
        }else{
            foreach ($posts as $post){
                $html .= "<div class='post-preview'>
                    <a class='post_id' href='https://".$_SERVER['HTTP_HOST']."/post/".$post['id']."'>
                        <h2 class='post-title'>
                          ".$post['title']."
                        </h2>
                        <h3 class='post-subtitle'>
                            ".$post['segment']."
                        </h3>
                    </a>
                    <p class='post-meta'>Posted by <a href='#'>".$post['autor']."</a> <span class='updated_at'>".$post['updated_at']."</span>
                     <span class='keywords'>Keywords: ".$this->keywords($post['keywords'])."</span>
                    </p>
                </div>
                <hr>";
            }
        }
        if(empty($html)){
            return 'Sorry :) no more posts';
        }
        return $html;
    }

    public function about(){
        return view('about', array('page' =>  'Xulin, Xulin Tan, Xtan, CV, Lebenslauf, 履历, Resume, curriculum vitae'));
    }

    public function search($query){
        $posts = Posts::search($query)->get();
        return view('posts', array('page' => 'posts', 'posts' => $posts, 'category' => strtoupper("<3 we have found... for '".$query."'")));
    }

    public static function keywords($keywords){
        $html = '';
        $keywords = explode(",",$keywords);
        foreach ($keywords as $keyword){
            $html .= "<a href='/search/".$keyword."'>".$keyword."</a>, ";
        }
        return $html;
    }

    public function comment(Request $request){
        $user_ip = IpRequest::ip();
        if ($request->isMethod('post')){
            $email = $request->input('email');
            $name = $request->input('name');
            $comment = $request->input('comment');
            $post_id = $request->input('post_id');
            Comments::create(array("email" => $email,
                                    "name" => $name,
                                    "comment" => $comment,
                                    "post_id" => $post_id,
                                    "ip" => $user_ip));
            $comments = Comments::where("post_id", $post_id)->orderBy("created_at", "desc")->take(1)->get();
            foreach ($comments as $comment){
                $html = "<div class=\"col-sm-12\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <strong>".$comment['name']."</strong> <span class=\"text-muted\">".$comment['created_at']."</span>
                            </div>
                            <div class=\"panel-body\">
                                ".$comment['comment']."
                            </div><!-- /panel-body -->
                        </div><!-- /panel panel-default -->
                    </div><!-- /col-sm-5 -->";
                return $html;
            }
        }
    }

    public function test(){
        Users::create([
            'name' => 'fatalerrortxl',
            'email' => 'tiemann9898@mail.com',
            'password' => bcrypt("Testing73."),
        ]);
    }
}

class User{
    public $user_ip;
}

class Contact{
    public $name;
    public $email;
    public $message;
}


