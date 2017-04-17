<?php $__env->startSection('menu'); ?>
    <?php echo $__env->make('menu.menuUser', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="panel panel-default">
    <div class="panel-heading text-center">
        Danh sách link
    </div>
    <table class="table table-bordered">
        <tr class="active">
            <td>ID</td>
            <td>Ảnh link</td>
            <td>Link name</td>
            <td>Link url</td>
            <td>#</td>
        </tr>
        <?php $__currentLoopData = $data['links']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $link): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo e($link->id); ?></td>
            <td>
                <img src="<?php echo e($link->link_url); ?>" class="img-responsive center-block" style="max-width: 50px;">
            </td>
            <td><a href="<?php echo e($link->link_name); ?>"><?php echo e($link->link_name); ?></a></td>
            <td><a href="<?php echo e($link->link_title); ?>"><?php echo e($link->link_title); ?></a></td>
            <td style="word-break: break-all;"><a href="<?php echo e($link->link_url); ?>"><?php echo e($link->link_url); ?></a></td>
            <td>
                <div class="clearfix">
                    <div class="pull-right">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-option-horizontal"></span>
                            </a>
                            <ul class="dropdown-menu" style="border-radius: 0;right: 0;left: auto;">
                                <li>
                                    <a href="<?php echo e(url('user/link/edit/'.$link->id)); ?>">
                                        <span class="glyphicon glyphicon-pencil"></span> Sửa link
                                    </a> 
                                </li> 
                            </ul>  
                        </div>
                    </div>
                </div> 
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </table>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>