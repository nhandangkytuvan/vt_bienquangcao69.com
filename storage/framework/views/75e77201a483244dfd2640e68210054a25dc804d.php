<?php $__env->startSection('menu'); ?>
    <?php echo $__env->make('menu.menuUser', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<form method="post">
    <?php echo e(csrf_field()); ?>

    <div class="panel panel-default">
        <div class="panel-heading text-center">Xóa link</div>
        <table class="table table-bordered">
            <tr class="active">
                <td>ID</td>
                <td>link name</td>
                <td>link title</td>
                <td>link url</td>
                <td>#</td>
            </tr>
            <tr>
                <td><?php echo e($data['link']->id); ?></td>
                <td><?php echo e($data['link']->link_name); ?></td>
                <td><?php echo e($data['link']->link_title); ?></td>
                <td style="word-break: break-all;"><?php echo e($data['link']->link_url); ?></td>
                <td>#</td>
            </tr>
        </table>
        <div class="panel-body">
            <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-leaf"></span>  Xóa link</button>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>