<?php $__env->startSection('menu'); ?>
    <?php echo $__env->make('menu.menuUser', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<form method="post"  enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>

    <div class="panel panel-default">
        <div class="panel-heading text-center">Sửa link</div>
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label">link name</label>
                <input type="text" class="form-control" name="link_name" value="<?php echo e($data['link']->link_name); ?>">
            </div>
            <div class="form-group">
                <label class="control-label">link title</label>
                <input type="text" class="form-control" name="link_title" value="<?php echo e($data['link']->link_title); ?>">
            </div>
            <div class="form-group">
                <label class="control-label">link url</label>
                <input type="text" class="form-control" name="link_url" value="<?php echo e($data['link']->link_url); ?>">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit"><span class="fa fa-external-link"></span>  Sửa link</button> 
            </div>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>