<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Images;

class Front extends Controller
{
    public function index(){
//        $posts = Posts::all(array('id', 'title', 'autor','category', 'segment','reading_amount', 'created_at', 'updated_at'))
//            ->take(5);
//        session('page_number', $page_number);
        $posts = Posts::orderBy('updated_at', 'desc')->take(5)->get();
        return view('home', array('page' => 'home', 'posts' => $posts));
    }

    public function getImage($post_id){
        $images = Images::where('post_id', $post_id)->get();
        foreach ($images as $image){
            return $image['image'];
        }
    }

    public function post($post_id){
        $post = Posts::find($post_id);
        $image = $this->getImage($post_id);
        return view('post', array('page' => 'post', 'post' => $post, 'image' => $image));
    }

    public function posts($category){
        $posts = Posts::where('category', 'like', $category.'%')->orderBy('updated_at', 'desc')->take(9)->get();
        return view('posts', array('page' => 'posts', 'posts' => $posts, 'category' => strtoupper($category)));
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
                    <a class='post_id' href='http://".$_SERVER['HTTP_HOST']."/blog/public/post/".$post['id']."'>
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
                    <a class='post_id' href='http://".$_SERVER['HTTP_HOST']."/blog/public/post/".$post['id']."'>
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

    public function search($query){
        $posts = Posts::search($query)->get();
        return view('posts', array('page' => 'posts', 'posts' => $posts, 'category' => strtoupper("we have found...")));
    }

    public static function keywords($keywords){
        $html = '';
        $keywords = explode(",",$keywords);
        foreach ($keywords as $keyword){
            $html .= "<a href='/blog/public/search/".$keyword."'>".$keyword."</a>, ";
        }
        return $html;
    }

    public function test($post_id){
        $images = Images::where('post_id', $post_id)->get();
       foreach ($images as $image){
           print_r($image['id'])."<br>";
       }
    }
}


