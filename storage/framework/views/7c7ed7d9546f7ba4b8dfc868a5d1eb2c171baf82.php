<?php $__env->startSection('menu'); ?>
    <?php echo $__env->make('menu.menuUser', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<form method="post">
    <?php echo e(csrf_field()); ?>

    <div class="panel panel-default">
        <div class="panel-heading text-center">Xóa slide</div>
        <table class="table table-bordered">
            <tr class="active">
                <td>ID</td>
                <td>link url</td>
                <td>link image</td>
                <td>#</td>
            </tr>
            <tr>
                <td><?php echo e($data['slide']->id); ?></td>
                <td style="word-break: break-all;"><?php echo e($data['slide']->slide_url); ?></td>
                <td style="word-break: break-all;"><?php echo e($data['slide']->slide_image); ?></td>
                <td>#</td>
            </tr>
        </table>
        <div class="panel-body">
            <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-leaf"></span>  Xóa slide</button>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>