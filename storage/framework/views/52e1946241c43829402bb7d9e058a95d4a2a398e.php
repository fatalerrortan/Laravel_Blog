

<?php $__env->startSection('contents'); ?>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            <?php echo e($post['title']); ?>

                        </h2>
                        <h3 class="post-subtitle">
                            <?php echo e($post['segment']); ?>

                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#"><?php echo e($post['autor']); ?></a> <?php echo e($post['updated_at']); ?></p>
                </div>
                <hr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <!-- Pager -->
            <ul class="pager">
                <li class="next">
                    <a href="#">Older Posts &rarr;</a>
                </li>
            </ul>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>