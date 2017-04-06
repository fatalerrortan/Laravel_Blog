<?php
/**
 * Created by PhpStorm.
 * User: tiema
 * Date: 4/6/2017
 * Time: 6:55 PM
 */
?>
<h1>admin test</h1>

<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo e($post['category']); ?> <br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>