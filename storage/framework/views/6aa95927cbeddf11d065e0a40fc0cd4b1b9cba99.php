<?php $__env->startSection('menu'); ?>
    <?php echo $__env->make('menu.menuUser', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div style="margin-bottom: 10px;">
    <form action="<?php echo e(url('user/media/index')); ?>" class="form-inline">
        <input type="hidden" name="view" value="<?php echo e(Request::input('view')); ?>">
        <div class="form-group">
            <select name="term_id" class="form-control">
                <option value="">Chọn thư mục</option>
                <?php $__currentLoopData = $data['terms']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $term): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <?php if($term->term_id == 0): ?>
                        <option <?php echo e(Request::input('term_id') == $term->id ? 'selected' : ''); ?> value="<?php echo e($term->id); ?>"><?php echo e($term->term_name); ?></option>
                        <?php $__currentLoopData = $data['terms']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2=> $term2): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <?php if($term2->term_id == $term->id): ?>
                                <option <?php echo e(Request::input('term_id') == $term2->id ? 'selected' : ''); ?> value="<?php echo e($term2->id); ?>">--<?php echo e($term2->term_name); ?></option>
                                <?php $__currentLoopData = $data['terms']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key3=> $term3): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <?php if($term3->term_id == $term2->id): ?>
                                        <option <?php echo e(Request::input('term_id') == $term3->id ? 'selected' : ''); ?> value="<?php echo e($term2->id); ?>">----<?php echo e($term2->term_name); ?></option>
                                        <?php  unset($data['terms'][$key3])  ?>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                <?php  unset($data['terms'][$key2])  ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <select name="user_id" class="form-control">
                <option value="">Chọn tác giả</option>
                <?php $__currentLoopData = $data['users']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$user): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <option <?php echo e(Request::input('user_id') == $user->id ? 'selected' : ''); ?> value="<?php echo e($user->id); ?>"><?php echo e($user->user_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Tên media" name="media_name" value="<?php echo e(Request::input('media_name')); ?>">
        </div>
        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> Tìm kiếm</button>
    </form>
</div>
<div class="panel panel-default">
    <div class="panel-heading text-center">
        <a href="#" class="pull-left"> <span class="label label-success">Tông: <?php echo e($data['medias']->total()); ?></span> </a>
        Danh sách ảnh
        <a href="<?php echo e(url('user/media/index?view=thumbnail')); ?>" class="pull-right" style="margin-left: 5px;"> <span class="glyphicon glyphicon-th-list"></span> </a>
        <a href="<?php echo e(url('user/media/index?view=icon')); ?>" class="pull-right" style="margin-left: 5px;"> <span class="glyphicon glyphicon-th-large"></span> </a>
        <a href="<?php echo e(url('user/media/index?view=list')); ?>" class="pull-right" style="margin-left: 5px;"> <span class="glyphicon glyphicon-list"></span> </a>
    </div>
    <table class="table table-bordered">
        <tr class="active">
            <td>ID</td>
            <td>Tên</td>
            <td>Thư mục</td>
            <td>Tác giả</td>
            <td>Thời gian up</td>
            <td>#</td>
        </tr>
        <?php $__currentLoopData = $data['medias']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $media): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo e($media->id); ?></td>
            <td><a href="<?php echo e(asset('public/img/'.$media->media_file)); ?>"><?php echo e($media->media_name); ?></a></td>
            <td><?php echo e(isset($media->term) ? $media->term->term_name : ''); ?></td>
            <td><?php echo e($media->user->user_name); ?></td>
            <td><?php echo e($media->created_at); ?></td>
            <td>
                <div class="clearfix">
                    <div class="pull-right">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-option-horizontal"></span>
                            </a>
                            <ul class="dropdown-menu" style="border-radius: 0;right: 0;left: auto;">
                                <li>
                                    <a href="<?php echo e(asset('public/img/'.$media->media_file)); ?>">
                                        <span class="glyphicon glyphicon-eye-open"></span> Xem ảnh
                                    </a> 
                                </li> 
                                <li>
                                    <a href="<?php echo e(url('user/media/edit/'.$media->id)); ?>">
                                        <span class="glyphicon glyphicon-pencil"></span> Sửa ảnh
                                    </a> 
                                </li> 
                                <li>
                                    <a href="<?php echo e(url('user/media/delete/'.$media->id)); ?>">
                                        <span class="glyphicon glyphicon-trash"></span> Xóa ảnh
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
        <?php echo e($data['medias']->appends(request()->except('page'))->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>