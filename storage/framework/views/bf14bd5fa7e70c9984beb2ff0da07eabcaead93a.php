<?php $__env->startSection('menu'); ?>
    <?php echo $__env->make('menu.menuUser', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="panel panel-default">
    <div class="panel-heading text-center">
        Danh sách slide
    </div>
    <table class="table table-bordered">
        <tr class="active">
            <td>ID</td>
            <td>Ảnh slide</td>
            <td>Link url</td>
            <td>Link image</td>
            <td>#</td>
        </tr>
        <?php $__currentLoopData = $data['slides']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $slide): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo e($slide->id); ?></td>
            <td>
                <img src="<?php echo e($slide->slide_image); ?>" class="img-responsive center-block" style="max-width: 50px;">
            </td>
            <td style="word-break: break-all;"><a href="<?php echo e($slide->slide_url); ?>"><?php echo e($slide->slide_url); ?></a></td>
            <td style="word-break: break-all;"><a href="<?php echo e($slide->slide_image); ?>"><?php echo e($slide->slide_image); ?></a></td>
            <td>
                <div class="clearfix">
                    <div class="pull-right">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-option-horizontal"></span>
                            </a>
                            <ul class="dropdown-menu" style="border-radius: 0;right: 0;left: auto;">
                                <li>
                                    <a href="<?php echo e(url('user/slide/edit/'.$slide->id)); ?>">
                                        <span class="glyphicon glyphicon-pencil"></span> Sửa slide
                                    </a> 
                                </li> 
                                <li>
                                    <a href="<?php echo e(url('user/slide/delete/'.$slide->id)); ?>">
                                        <span class="glyphicon glyphicon-trash"></span> Xóa slide
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