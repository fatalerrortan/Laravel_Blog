<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Images;
use App\Comments;
use App\Newsletter;
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
        $posts = Posts::where('status', 1)->orderBy('created_at', 'desc')->take(5)->get();
        return view('home', array('page' => 'Xulin, 谭许麟, Tan, Xtan, Study Blog, home', 'posts' => $posts));
    }

    public static function userAgentDetect(){
        $useragent=$_SERVER['HTTP_USER_AGENT'];
        $ifMobil = 'false';
        if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
            $ifMobil = 'true';
        }
        return $ifMobil;
    }

    public function newsletter(Request $request){
        Newsletter::create(array("email" => $request->input('email')));
        return 'works';
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
        $comments = Comments::where("post_id", $post_id)->orderBy("created_at", "asc")->get();
        $related_posts = Posts::where('related', 'like','%,'.$post_id.',%')->get();
        return view('post', array('page' => $post['title'].',谭许麟,Xulin Tan,Xtan,'.$post['keywords'], 'post' => $post, 'image' => $image, 'comments' => $comments, 'related_posts' => $related_posts));
    }

    public function posts($category){
        $posts = Posts::where('status', 1)->where('category', 'like', $category.'%')->orderBy('created_at', 'desc')->take(9)->get();
        return view('posts', array('page' =>  'Xulin, 谭许麟, Xulin Tan, Xtan, '. $category, 'posts' => $posts, 'category' => strtoupper($category)));
    }

    public function more(Request $request){
        if ($request->isMethod('post')){
            $last_item_date = $request->input('last_item_date');
            if(!empty($request->input('category'))){
                $html = $this->getHtml(Posts::where('status', 1)->where('category', 'like', $request->input('category').'%')->where('created_at', '<', $last_item_date)->orderBy('created_at', 'desc')->take(9)->get(), true);
            }else{
                $html = $this->getHtml(Posts::where('status', 1)->where('created_at', '<', $last_item_date)->orderBy('created_at', 'desc')->take(5)->get());
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
                    <p class='post-meta'>Posted by <a href='https://".$_SERVER['HTTP_HOST']."/about'>".$post['autor']."</a> <span class='updated_at'>".$post['created_at']."</span>
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
                    <p class='post-meta'>Posted by <a href='https://".$_SERVER['HTTP_HOST']."/about'>".$post['autor']."</a> <span class='updated_at'>".$post['created_at']."</span>
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
        return view('about', array('page' =>  'Xulin, 谭许麟, Xulin Tan, Xtan, CV, Lebenslauf, 履历, Resume, curriculum vitae'));
    }

    public function search($query){
        $posts = Posts::search($query)->get();
        return view('posts', array('page' => 'Xulin, 谭许麟, Xulin Tan, Xtan,'.$query, 'posts' => $posts, 'category' => strtoupper("<3 we have found... for '".$query."'")));
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
       Log::info(env('SPARKPOST_SECRET'));
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


