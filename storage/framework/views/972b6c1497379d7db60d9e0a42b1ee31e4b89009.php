<?php $__env->startSection('menu'); ?>
    <?php echo $__env->make('menu.menuUser', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="panel panel-default">
    <div class="panel-heading text-center">
        <a href="#" class="pull-left"> <span class="label label-success">Tông: <?php echo e($data['comments']->total()); ?></span> </a>
        Danh sách bài viết
    </div>
    <table class="table table-bordered">
        <tr class="active">
            <td>ID</td>
            <td>Bài viết</td>
            <td>Nội dung</td>
            <td>T.thái</td>
            <td>Date</td>
            <td>#</td>
        </tr>
        <?php $__currentLoopData = $data['comments']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $comment): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <?php  $post = $comment->post;  ?>
        <tr <?php echo $comment->comment_is_new==1 ? 'class="bg-success"' : ''; ?>>
            <td><?php echo e($comment->id); ?></td>
            <td><a href="<?php echo e(url($post->post_alias.'/'.$post->id.'.htm')); ?>"><?php echo e($post->post_name); ?></a></td>
            <td><?php echo $comment->comment_detail; ?></td>
            <td>
                <div class="radio <?php echo e($comment->comment_status == 1 ? 'radio-success' : 'radio-default'); ?> radio-inline">
                    <input type="radio" checked="">
                    <label></label>
                </div>
            </td>
            <td><?php echo e(date('d.m',strtotime($comment->created_at))); ?></td>
            <td>
                <div class="clearfix">
                    <div class="pull-right">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-option-horizontal"></span>
                            </a>
                            <ul class="dropdown-menu" style="border-radius: 0;right: 0;left: auto;">
                                <li>
                                    <a href="<?php echo e(url('user/comment/active/'.$comment->id)); ?>">
                                        <span class="glyphicon glyphicon-check"></span> Kích hoạt comment
                                    </a> 
                                </li> 
                                <li>
                                    <a href="<?php echo e(url('user/comment/reply/'.$comment->id)); ?>">
                                        <span class="glyphicon glyphicon-share-alt"></span> Reply comment
                                    </a> 
                                </li> 
                                <li>
                                    <a href="<?php echo e(url('user/comment/delete/'.$comment->id)); ?>">
                                        <span class="glyphicon glyphicon-trash"></span> Xóa comment
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
    <div class="panel-footer">
        <?php echo $data['comments']->appends(request()->except('page'))->links(); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>