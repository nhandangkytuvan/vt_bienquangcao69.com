<?php $__env->startSection('menu'); ?>
    <?php echo $__env->make('menu.menuUser', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="alert alert-success">
    width-slide:465px; height-slide:350px; link ảnh slide lấy từ thư viện ảnh
</div>
<form method="post"  enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>

    <div class="panel panel-default">
        <div class="panel-heading text-center">Tạo slide</div>
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label">Link url</label>
                <input type="text" class="form-control" name="slide_url"  value="<?php echo e(old('slide_url')); ?>">
            </div>
            <div class="form-group">
                <label class="control-label">Link image</label>
                <input type="text" class="form-control" name="slide_image"  value="<?php echo e(old('slide_image')); ?>">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit"><span class="fa fa-fire"></span>  Thêm slide</button> 
            </div>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>