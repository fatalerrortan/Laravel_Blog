<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Images;
use App\User;
use Illuminate\Support\Facades\Log;

class Admin extends Controller{

    public function auth(){
        return view('auth', array('page' => 'auth'));
    }

    public function index(Request $request){
        $user = User::where("name", $request->input('name'))->first();
        Log::info("out: ".$request->input('pwd')." and in: ".$user['password']);
        if($user['password'] != $request->input('pwd')){return exit("日你妈");}
        $posts = Posts::orderBy('created_at', 'desc')->get();
        return view('admin', array('page' => 'admin', 'posts' => $posts));
    }

    public function filterable(Request $request){
        switch ($request->input('flag')){
            case "category":
                $param = $request->input("pattern") == "all" ? "" : $request->input("pattern");
                $posts = Posts::where('category', 'like', $param.'%')
                    ->orderBy('updated_at', $request->input("order"))->get();
                $html = $this->gethtml($posts);
                return $html;
                break;
            case "timestamp":
                break;
            default:
                return "unfilterable";
        }
    }

    public function insert(Request $request){
        if($request->input("if_update") == "yes"){
            return $this->updatePost($request);
        }
        Posts::create(array(
            'title' => $request->input("post_title"),
            'autor' => 'Xulin Tan',
            'segment' => $request->input("subtitle"),
            'category' => $request->input("post_category"),
            'related' => $request->input("related_posts"),
            'keywords' => $request->input("keywords"),
            'article' => $request->input("post_body"),
        ));
        $state = "<h1>Successfully Inserted</h1>
                        <h3><a href='https://".$_SERVER['HTTP_HOST']."/adminauth'>To Admin</a></h3>
                        <h3>OR</h3>
                        <h3><a href='https://".$_SERVER['HTTP_HOST']."/'>To Homepage</a></h3>";
        if($request->hasFile('post_img')) {
//            Log::info(print_r($request->file('post_img')->ge, true));
            $file = $request->file("post_img");
            $file->move(public_path("uploads/"), $file->getClientOriginalName());
            $file_binary = file_get_contents(public_path("uploads/".$file->getClientOriginalName()));
            $result = $this->saveImage($request->input("post_title"), $request->input("image_name"), $file_binary);
            if($result){
                return $state;
            }else{
                return "ops Image store error Sorry";
            }
        }
        return $state;
    }

    public function updatePost(Request $request){
        $post = Posts::find($request->input("post_id"));
        $post->title = $request->input("post_title");
        $post->category = $request->input("post_category");
        $post->segment = $request->input("subtitle");
        $post->related = ",".$request->input("related_posts");
        $post->keywords = $request->input("keywords");
        $post->article = $request->input("post_body");
        $post->save();
        if($request->hasFile('post_img')) {
            $this->updatePostImage($request);
        }
        $state = "<h1>Successfully Inserted</h1>
                        <h3><a href='https://".$_SERVER['HTTP_HOST']."/adminauth'>To Admin</a></h3>
                        <h3>OR</h3>
                        <h3><a href='https://".$_SERVER['HTTP_HOST']."/post/".$request->input('post_id')."'>To Post</a></h3>";
        return $state;
    }

    public function updatePostImage(Request $request){
//            Log::info(print_r($request->file('post_img')->ge, true));
        $file = $request->file("post_img");
        $file->move(public_path("uploads/"), $file->getClientOriginalName());
        $file_binary = file_get_contents(public_path("uploads/".$file->getClientOriginalName()));
        $old_image = Images::where("post_id", $request->input("post_id"))->first();
        if($old_image == null){
            return $this->saveImage($request->input("post_title"), $request->input("image_name"), $file_binary);
        }
        $old_image->name = $request->input("image_name");
        $old_image->image = $file_binary;
        $old_image->save();
        return true;
    }

    public function saveImage($post_title, $image_name, $image){
        $posts = Posts::where("title", $post_title)->get();
        $post_id = '';
        foreach ($posts as $post){$post_id = $post['id'];}
//        Log::info(print_r($post, true));
        Images::create(array(
            'post_id' => $post_id,
            'name' => $image_name,
            'image' => $image
        ));
        return true;
    }

    public function update(Request $request){
//        Log::info(date("Y-m-d H:i:s"));
        $post = Posts::find($request->input("post_id"));
        $post->updated_at = date("Y-m-d H:i:s");
        $post->save();
        $html = $this->operation($request->input("pattern"), $request->input("order"));
        return $html;
    }

    public function delete(Request $request){
        $post = Posts::find($request->input("post_id"));
        $post->delete();
        $html = $this->operation($request->input("pattern"), $request->input("order"));
        return $html;
    }

    public function edit(Request $request){
//        header('Content-Type: application/json');
        $post = Posts::find($request->input("post_id"));
        Log::info($post->category." and ".$post->title);
//        return json_encode(array(
//            "title" => $post->title,
//            "category" => $post->category
//        ));
        return "{\"title\":\"".preg_replace( "/\r|\n/", "", str_replace("\"","'",$post->title))."\",
                \"category\":\"".str_replace("\"","'",$post->category)."\",
                \"subtitle\":\"".preg_replace( "/\r|\n/", "", str_replace("\"","'",$post->segment))."\",
                \"related\":\"".str_replace("\"","'",$post->related)."\",
                \"keywords\":\"".str_replace("\"","'",$post->keywords)."\",
                \"post_id\":\"".str_replace("\"","'",$post->id)."\"}";
    }
//\"article\":\"".preg_replace( "/\r|\n/", "", str_replace("\"","'",$post->article))."\"}";
    public function editArticle(Request $request){
        $post = Posts::find($request->input("post_id"));
        return $post->article;
    }

    public function operation($pattern, $order){
        $param = $pattern == "all" ? "" : $pattern;
        $posts = Posts::where('category', 'like', $param.'%')
            ->orderBy('updated_at', $order)->get();
        $html = $this->gethtml($posts);
        return $html;
    }

    public function gethtml($posts){
        $html = "";
        foreach ($posts as $post){
            $html .= "<tr post_id='".$post['id']."'>
                    <th class=\"post_id\" scope=\"row\">".$post['id']."</th>
                    <td class=\"post_title\"><a class=\"social-icon\" href=\"https://".$_SERVER['HTTP_HOST']."/post/".$post['id']."\">".$post['title']."</a></td>
                    <td class=\"post_category\">".$post['category']."</td>
                    <td class=\"post_updated_at\">".$post['updated_at']."</td>
                    <td class=\"post_created_at\">".$post['created_at']."</td>
                    <td class=\"post_edit\"><a class=\"social-icon\" onclick=\"postEdit(this); postEditArticle(this)\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></a></td>
                    <td class=\"post_push\"><a class=\"social-icon\" onclick=\"postUpdate(this)\"><i class=\"fa fa-rocket\" aria-hidden=\"true\"></i></a></td>
                    <td class=\"post_delete\"><a class=\"social-icon\" onclick='postDelete(this)'><i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i></a></td>
                </tr>";
        }
        return $html;
    }
}
