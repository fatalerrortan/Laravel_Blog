@extends('layouts.master')

@section('contents')
    <div class="row">
        <div class="col-lg-4 col-md-2">
            <h2 id="category" class="post-title">{{$category}}</h2>
        </div>
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1" id="posts_container">
            @foreach($posts as $post)
                <div class="post-preview">
                    <a class="post_id" href="http://{{$_SERVER['HTTP_HOST']}}/blog/public/post/{{$post['id']}}">
                        <h5>
                            {{$post['title']}}
                        </h5>
                    </a>
                    <p class="post-meta">Posted by <a href="#">{{$post['autor']}}</a> <span class="updated_at">{{$post['updated_at']}}</span>
                        <span class='keywords'>Keywords: <?php echo App\Http\Controllers\Front::keywords($post['keywords']) ?></span>
                    </p>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
    <div class="row" id="pager" style="display: none">
        <div class="col-md-offset-5">
            <a class="social-icon"><h3>Get more Posts</h3></a>
        </div>
    </div>
@endsection

@section('extra_js')
    <script>
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        jQuery(window).scroll(function() {
            if(jQuery(window).scrollTop() + jQuery(window).height() == jQuery(document).height()) {
                jQuery("#pager").show();
            }else {
                jQuery("#pager").hide();
            }
        });
        jQuery("#pager").click(function () {
            var last_item_date = jQuery("#posts_container div.post-preview").last().find("span.updated_at").html();
//            console.log(last_item_date);
            var postData = new FormData();
            postData.append("_token", CSRF_TOKEN);
            postData.append("last_item_date", last_item_date);
            postData.append("category", jQuery("#category").html());
            jQuery.ajax({
                type:"POST",
                url:"/blog/public/more",
                dataType:"text",
                contentType:false,
                cache:false,
                processData:false,
                data:postData,
                success:function(html){
                    jQuery("#posts_container").append(html);
                }
            });
        });
    </script>
@endsection
