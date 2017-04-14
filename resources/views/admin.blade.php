@extends('layouts.master')
@section("extra_css")
@endsection

@section('contents')
    <div class="row well" id="new_post_form" style="border: #2DA02E; border-style: solid; display: none">
     <form method="post" action="/blog/public/insert">
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <select id="post_category" name="post_category" class="form-control" style="width: 10%">
                <option value="php">PHP</option>
                <option value="php_magento">Magento</option>
                <option value="php_laravel">Laravel</option>
                <option value="javascript">Javascript</option>
                <option value="javascript_jquery">jQuery</option>
                <option value="javascript_react">React</option>
            </select>
            <label for="post_title">Title</label>
            <input type="text" name="post_title" class="form-control" id="post_title" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="subtitle">Subtitle</label>
            <input type="text" name="subtitle" class="form-control" id="subtitle" placeholder="Subtitle">
        </div>
        <div class="form-group">
            <label for="related_posts">Related Posts</label>
            <input type="text" name="related_posts" class="form-control" id="related_posts" placeholder="1,2,3....">
        </div>
         <div class="form-group">
             <label for="keywords">Keywords</label>
             <input type="text" name="keywords" class="form-control" id="keywords" placeholder="php,js,os....">
         </div>
        <textarea id="post_body" name="post_body" class="form-control" rows="9"></textarea>
        <div class="form-group">
            <label for="post_img">File input</label>
            <input name="post_img" type="file" id="post_img">
        </div>
        <button id="cancle" class="btn btn-default">Cancle</button>
        <button type="submit" class="btn btn-default">Submit</button>
        <hr>
     </form>
    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#ID</th>
                <th>Title</th>
                <th>
                    <select class="custom-select" id="category">
                        <option value="all">All Stuffs</option>
                        <option value="php">All For PHP</option>
                        <option value="php_magento">Magento</option>
                        <option value="php_laravel">Laravel</option>
                        <option value="javascript">All For Javascript</option>
                        <option value="javascript_jquery">jQuery</option>
                        <option value="javascript_react">React</option>
                    </select>
                </th>
                <th class="col-md-2">Updated_At
                    <a class="social-icon post_order" order="asc"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                    <a class="social-icon post_order" order="desc"><i class="fa fa-arrow-down" aria-hidden="true"></i></a>
                </th>
                <th>Created_At</th>
                <th>Edit</th>
                <th>Push</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr post_id="{{$post['id']}}">
                    <th class="post_id" scope="row">{{$post['id']}}</th>
                    <td class="post_title"><a class="social-icon" href="http://{{$_SERVER['HTTP_HOST']}}/blog/public/post/{{$post['id']}}">{{$post['title']}}</a></td>
                    <td class="post_category">{{$post['category']}}</td>
                    <td class="post_updated_at">{{$post['updated_at']}}</td>
                    <td class="post_created_at">{{$post['created_at']}}</td>
                    <td class="post_edit"><a class="social-icon" onclick="postEdit(this)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    <td class="post_push"><a class="social-icon" onclick="postUpdate(this)"><i class="fa fa-rocket" aria-hidden="true"></i></a></td>
                    <td class="post_delete"><a class="social-icon" onclick="postDelete(this)"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('extra_js')
    <script>
        var filter_state = {category:"all", order:"desc"};
        var old_post_obj = {test:"dd"};
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        jQuery("#category").change(function () {
            var target_cate = jQuery(this).find("option:selected").val();
            filter_state.category = target_cate;
            var postData = new FormData();
            postData.append("_token", CSRF_TOKEN);
            postData.append("flag", "category");
            postData.append("pattern", filter_state.category);
            postData.append("order", filter_state.order);
            retrieveNewPosts(postData, "filter");
        });

        jQuery("a.post_order").click(function () {
            var order = jQuery(this).attr("order");
            if(order == filter_state.order) {return false;}
            filter_state.order = order;
            var postData = new FormData();
            postData.append("_token", CSRF_TOKEN);
            postData.append("flag", "category");
            postData.append("pattern", filter_state.category);
            postData.append("order", filter_state.order);
            retrieveNewPosts(postData, "filter");
        });

        function postDelete(element) {
            var post_id = jQuery(element).parent().parent().attr("post_id");
            var postData = new FormData();
            postData.append("_token", CSRF_TOKEN);
            postData.append("pattern", filter_state.category);
            postData.append("order", filter_state.order);
            postData.append("post_id", post_id);
            if(retrieveNewPosts(postData, "delete")){
                alert("Deleted");
            }
        }

        function postUpdate(element) {
            var post_id = jQuery(element).parent().parent().attr("post_id");
            var postData = new FormData();
            postData.append("_token", CSRF_TOKEN);
            postData.append("pattern", filter_state.category);
            postData.append("order", filter_state.order);
            postData.append("post_id", post_id);
            if(retrieveNewPosts(postData, "update")){
                alert("Updated");
            }
        }
        
        function postEdit(element) {
            var post_id = jQuery(element).parent().parent().attr("post_id");
            var postData = new FormData();
            postData.append("_token", CSRF_TOKEN);
            postData.append("post_id", post_id);
            var old_post = retrieveNewPosts(postData, "edit");
            console.log(old_post_obj);
            jQuery("#new_post_form").toggle("slow");
            return true;
        }

        function retrieveNewPosts(postData, urlPattern) {
            var result;
            jQuery.ajax({
                type:"POST",
                url:"/blog/public/" + urlPattern,
                dataType:"text",
                contentType:false,
                cache:false,
                processData:false,
                data:postData,
                success:function(html){
                    if(urlPattern != 'edit'){
                        jQuery("tbody").html(html);
                    }else {
                        old_post_obj.test = html;
                    }
                }
            });
            return true;
        }

        jQuery("#new_post, #cancle").click(function () {
            jQuery("#new_post_form").toggle('slow');
        });
    </script>
@endsection

