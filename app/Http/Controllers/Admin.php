<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use Illuminate\Support\Facades\Log;

class Admin extends Controller{

    public function index(){
        $posts = Posts::orderBy('updated_at', 'desc')->get();
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
        Posts::create(array(
            'title' => $request->input("post_title"),
            'autor' => 'Xulin Tan',
            'segment' => $request->input("subtitle"),
            'category' => $request->input("post_category"),
            'related' => $request->input("related_posts"),
            'keywords' => $request->input("keywords"),
            'article' => $request->input("post_body"),
        ));
        return "<h1>Successfully Inserted</h1>
                <h3><a href='http://".$_SERVER['HTTP_HOST']."/blog/public/admin'>To Admin</a></h3>
                <<h3>OR</h3>
                <h3><a href='http://".$_SERVER['HTTP_HOST']."/blog/public/'>To Homepage</a></h3>";
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
        $post = Posts::find($request->input("post_id"));
        Log::info($post->category);
        return $post->category;
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
                    <td class=\"post_title\"><a class=\"social-icon\" href=\"http://".$_SERVER['HTTP_HOST']."/blog/public/post/".$post['id']."\">".$post['title']."</a></td>
                    <td class=\"post_category\">".$post['category']."</td>
                    <td class=\"post_updated_at\">".$post['updated_at']."</td>
                    <td class=\"post_created_at\">".$post['created_at']."</td>
                    <td class=\"post_edit\"><a class=\"social-icon\" onclick=\"postEdit(this)\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></a></td>
                    <td class=\"post_push\"><a class=\"social-icon\" onclick=\"postUpdate(this)\"><i class=\"fa fa-rocket\" aria-hidden=\"true\"></i></a></td>
                    <td class=\"post_delete\"><a class=\"social-icon\" onclick='postDelete(this)'><i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i></a></td>
                </tr>";
        }
        return $html;
    }
}
