
<?php $__env->startSection('contents'); ?>
    <a href="<?php echo e($post_url); ?>">
        <h1><?php echo e($title); ?></h1>
        <h3><?php echo e($subtitle); ?></h3>
        <p class="post-meta"><span class="updated_at"><?php echo e($created_at); ?></span>
        <span class="keywords">Keywords: <?php echo e($keywords); ?></span>
        </p>
    </a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>