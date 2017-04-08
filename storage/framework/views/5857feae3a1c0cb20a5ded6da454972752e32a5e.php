<?php $__env->startSection('contents'); ?>

<div class="row">

    <!-- Blog Post Content Column -->
    <div class="col-lg-8">

        <!-- Blog Post -->

        <!-- Title -->
        <h1><?php echo e($post['title']); ?></h1>

        <!-- Author -->
        <p class="lead">
            by <a href="#"><?php echo e($post['autor']); ?></a>
        </p>

        <hr>
        <!-- Date/Time -->
        <p><span class="glyphicon glyphicon-time"></span> <?php echo e($post['updated_at']); ?></p>

        <hr>

        <!-- Preview Image -->
        <img class="img-responsive" src="data:image/jpeg;base64,<?php echo e(base64_encode($post['image'])); ?>" alt="">

        <hr>

        <!-- Post Content -->
        <div class="post_content">
            <?php echo e($post['article']); ?>

        </div>
        <hr>

        <!-- Blog Comments -->

        <!-- Comments Form -->
        <div class="well">
            <h4>Leave a Comment:</h4>
            <form role="form">
                <div class="form-group">
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <hr>

        <!-- Posted Comments -->

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>