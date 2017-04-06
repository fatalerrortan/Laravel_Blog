<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class Admin extends Controller
{
    public function index(){
        $posts = Posts::all(array('id', 'title', 'category', 'reading_amount', 'created_at', 'updated_at'));
        return view('admin', array('page' => 'admin', 'posts' => $posts));
    }

    public function insert(){
        Posts::create(array(
            'title' => 'inpout for admin',
            'category' => 'javascript',
            'article' => 'dklsfasds54656456fkljsdlkfj sdlfkjsdl kfjlsdkfjsldkfjsdlfkjsdlkj',
            'image' => '',
            'comments' => 'asdasdasdas',
            'reading_amount' => '122'
        ));
        return 'posted';
    }

    public function update($post_id){
        $post = Posts::find($post_id);
        $post->category = 'php_magento';
        $post->save();
        return 'updated';
    }

    public function delete($post_id){
        $post = Posts::find($post_id);
        $post->delete();
        return 'deleted';
    }
}
