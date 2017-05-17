
<div class="row">
    <div class="col-md-offset-11 col-md-1">
        <a id="profile_edit"><i class="fa fa-cog fa-3x" aria-hidden="true"></i></a>
    </div>
</div>
<div class="row">
    <div class="col-md-3 col-md-offset-4">
            <img class="img-responsive img-circle" width="210px" height="200px" src="data:image/jpeg;base64,<?php echo e(base64_encode($user->image)); ?>" alt="">
    </div>
    <div class="col-md-5">
            <h3><i class="fa fa-id-card" aria-hidden="true"></i>&nbsp;<?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></h3>
            <h5><i class="fa fa-thumbs-up" aria-hidden="true"></i> <b>Skills: <?php echo e($user->skills); ?></b></h5>
            <h5><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Current Project: <?php echo e($user->project); ?></h5>
            <h5><i class="fa fa-briefcase" aria-hidden="true"></i>&nbsp;Position: <?php echo e($user->position); ?></h5>
            <h5><i class="fa fa-sitemap" aria-hidden="true"></i>&nbsp;Department: <?php echo e($user->department); ?></h5>
            <h5></h5><i class="fa fa-university" aria-hidden="true"></i> Company: <?php echo e($user->company); ?>

            <h5><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;Email: <a href="mailto:<?php echo e($user->email); ?>?Subject=Test" target="_top"><?php echo e($user->email); ?></a></h5>
    </div>
</div>
<hr />