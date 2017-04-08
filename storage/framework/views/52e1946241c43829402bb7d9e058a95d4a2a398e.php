

<?php $__env->startSection('contents'); ?>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1" id="posts_container">
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="post-preview">
                    <a class="post_id" href="post/<?php echo e($post['id']); ?>">
                        <h2 class="post-title">
                            <?php echo e($post['title']); ?>

                        </h2>
                        <h3 class="post-subtitle">
                            <?php echo e($post['segment']); ?>

                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#"><?php echo e($post['autor']); ?></a> <span class="updated_at"><?php echo e($post['updated_at']); ?></span></p>
                </div>
                <hr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <div class="row" id="pager" style="display: none">
        <div class="col-md-offset-5">
            <a class="social-icon"><h3>Get more Posts</h3></a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra_js'); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>