<?php $__env->startSection("extra_css"); ?>
    <link href="<?php echo e(asset('css/prism.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contents'); ?>

<div class="row">

    <!-- Blog Post Content Column -->
    <div class="col-md-8">

        <!-- Blog Post -->

        <!-- Title -->
        <h1><?php echo e($post['title']); ?></h1>

        <!-- Author -->
        <p class="lead">
            by <a href="https://<?php echo e($_SERVER['HTTP_HOST']); ?>/about"><?php echo e($post['autor']); ?></a>
        </p>

        <hr>
        <!-- Date/Time -->
        <p><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo e($post['updated_at']); ?> <span class="keywords">
                <i class="fa fa-key" aria-hidden="true"></i> <?php echo App\Http\Controllers\Front::keywords($post['keywords']) ?></span></p>

        <hr>

        <!-- Preview Image -->
        <img class="img-responsive" width="750px" height="270px" src="data:image/jpeg;base64,<?php echo e(base64_encode($image)); ?>" alt="">
        <hr>

        <!-- Post Content -->
        <div class="post_content">
            <?php
                $doc = new DOMDocument();
                libxml_use_internal_errors(true);
                $doc->loadHTML( mb_convert_encoding($post['article'], 'HTML-ENTITIES', "UTF-8"));
            //                echo htmlentities($post['article']);
                libxml_clear_errors();
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
                <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <strong><?php echo e($comment['name']); ?></strong> <span class="text-muted"><?php echo e($comment['created_at']); ?></span>
                            </div>
                            <div class="panel-body">
                                <?php echo e($comment['comment']); ?>

                            </div><!-- /panel-body -->
                        </div><!-- /panel panel-default -->
                    </div><!-- /col-sm-5 -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div><!-- /row -->
        </div>
    </div>
    <div class="col-md-4">
        <div id="related_posts">
            <h3>Related Posts</h3>
            <?php $__currentLoopData = $related_posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $related_post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h5><br><br><br>
                    <i class="fa fa-plug" aria-hidden="true"></i>
                    <a class="social-icon" href="https://<?php echo e($_SERVER['HTTP_HOST']); ?>/post/<?php echo e($related_post['id']); ?>"><?php echo e($related_post['title']); ?></a></h5><hr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
        <hr>
        <!-- Posted Comments -->
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra_js'); ?>
    <script src="<?php echo e(asset('js/prism.js')); ?>"></script>
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
            postData.append("post_id", '<?php echo e($post['id']); ?>');
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>