@extends('layouts.master')

@section("extra_css")
    <link href="{{asset('css/prism.css')}}" rel="stylesheet">
@endsection

@section('contents')
{{--{{$post['id']}}--}}
<div class="row">

    <!-- Blog Post Content Column -->
    <div class="col-md-8">

        <!-- Blog Post -->

        <!-- Title -->
        <h1>{{$post['title']}}</h1>

        <!-- Author -->
        <p class="lead">
            by <a href="#">{{$post['autor']}}</a>
        </p>

        <hr>
        <!-- Date/Time -->
        <p><i class="fa fa-calendar" aria-hidden="true"></i> {{$post['updated_at']}} <span class="keywords">
                <i class="fa fa-key" aria-hidden="true"></i> <?php echo App\Http\Controllers\Front::keywords($post['keywords']) ?></span></p>

        <hr>

        <!-- Preview Image -->
        <img class="img-responsive" src="data:image/jpeg;base64,{{base64_encode($image)}}" alt="">
        <hr>

        <!-- Post Content -->
        <div class="post_content">
            <?php
                $doc = new DOMDocument();
                $doc->loadHTML($post['article']);
                echo $doc->saveHTML();
            ?>
        </div>
        <hr>

        <!-- Blog Comments -->

        <!-- Comments Form -->
        <div class="well">
            <form id="comment">
                <h4><input class="form-control input-sm" style="width: 40%; display: inline" type="text" placeholder="your nickname"> leave a Comment:</h4>
                <div class="form-group">
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="button" class="btn btn-primary">Submit</button>
            </form>
            <div id="comments" class="row">
                @foreach($comments as $comment)
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <strong>{{$comment['name']}}</strong> <span class="text-muted">{{$comment['created_at']}}</span>
                            </div>
                            <div class="panel-body">
                                {{$comment['comment']}}
                            </div><!-- /panel-body -->
                        </div><!-- /panel panel-default -->
                    </div><!-- /col-sm-5 -->
                @endforeach
            </div><!-- /row -->
        </div>
    </div>
    <div class="col-md-4">
        <div id="related_posts">
            <h3>Related Posts</h3>
            @foreach($related_posts as $related_post)
                <h5><br><br><br>
                    <i class="fa fa-plug" aria-hidden="true"></i>
                    <a class="social-icon" href="https://{{$_SERVER['HTTP_HOST']}}/post/{{$related_post['id']}}">{{$related_post['title']}}</a></h5><hr>
            @endforeach
        </div>
    </div>
        <hr>
        <!-- Posted Comments -->
</div>
@endsection

@section('extra_js')
    <script src="{{asset('js/prism.js')}}"></script>
    <script>
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        jQuery("#comment button").click(function () {
            var email = prompt("would you like to leave a email to contact?", "i want you@xulin.com");
//            if(email != null){}
            var postData = new FormData();
            postData.append("_token", CSRF_TOKEN);
            postData.append("email", email);
            if(jQuery("#comment input").val() == ""){
                postData.append("name", "Guest");
            }else {
                postData.append("name", jQuery("#comment input").val());
            }
            postData.append("comment", jQuery("#comment textarea").val());
            postData.append("post_id", '{{$post['id']}}');
            jQuery.ajax({
                type:"POST",
                url:"/comment",
                dataType:"text",
                contentType:false,
                cache:false,
                processData:false,
                data:postData,
                success:function(html){
                    jQuery("#comments").append(html);
                    jQuery("html, body").animate({ scrollTop: $(document).height() }, 1000);
//                    jQuery("#comments div.col-sm-12").last().toggle("slow");
                }
            });
        });
    </script>
@endsection