<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class Front extends Controller
{
    public function index(){
//        $posts = Posts::all(array('id', 'title', 'autor','category', 'segment','reading_amount', 'created_at', 'updated_at'))
//            ->take(5);
//        session('page_number', $page_number);
        $posts = Posts::orderBy('updated_at', 'desc')->take(5)->get();
        return view('home', array('page' => 'home', 'posts' => $posts));
    }

    public function post($post_id){
        $post = Posts::find($post_id);
        return view('post', array('page' => 'post', 'post' => $post));
    }

    public function more(Request $request){
        if ($request->isMethod('post')){
            $last_item_date = $request->input('last_item_date');
            $html = $this->getHtml(Posts::where('updated_at', '<', $last_item_date)->orderBy('updated_at', 'desc')->take(5)->get());
            return $html;
        }
    }

    public function getHtml($posts){
        $html = '';
        foreach ($posts as $post){
            $html .= "<div class='post-preview'>
                    <a class='post_id' href='".$post['id']."'>
                        <h2 class='post-title'>
                          ".$post['title']."
                        </h2>
                        <h3 class='post-subtitle'>
                            ".$post['segment']."
                        </h3>
                    </a>
                    <p class='post-meta'>Posted by <a href='#'>".$post['autor']."</a> <span class='updated_at'>".$post['updated_at']."</span></p>
                </div>
                <hr>";
        }
        if(empty($html)){
            return 'Sorry :) no more posts';
        }
        return $html;
    }

    public function test(){
        $posts = Posts::where('updated_at', '<', '2017-04-06 14:23:23')->orderBy('updated_at', 'desc')->take(4)->get();
        foreach ($posts as $post){
            echo $post['id'] . " and " . $post['updated_at']."<br>";
        }
    }
}


