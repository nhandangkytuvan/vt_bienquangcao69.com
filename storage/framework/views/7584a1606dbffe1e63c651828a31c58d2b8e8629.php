<?php $__env->startSection('menu'); ?>
    <?php echo $__env->make('menu.menuUser', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="alert alert-success">
    Khu vực này để thay đổi link ảnh trên cùng.
</div>
<form method="post"  enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>

    <div class="panel panel-default">
        <div class="panel-heading text-center">Tạo link</div>
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label">Tên</label>
                <input type="text" class="form-control" name="link_name"  value="<?php echo e(old('link_name')); ?>">
            </div>
            <div class="form-group">
                <label class="control-label">Title</label>
                <input type="text" class="form-control" name="link_title"  value="<?php echo e(old('link_title')); ?>">
            </div>
            <div class="form-group">
                <label class="control-label">Url</label>
                <input type="text" class="form-control" name="link_url"  value="<?php echo e(old('link_url')); ?>">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit"><span class="fa fa-external-link"></span>  Thêm link</button> 
            </div>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>