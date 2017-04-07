<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class Front extends Controller
{
    public function index(){
        $posts = Posts::all(array('id', 'title', 'autor','category', 'segment','reading_amount', 'created_at', 'updated_at'));
        return view('home', array('page' => 'home', 'posts' => $posts));
    }
}
