<?php $__env->startSection('menu'); ?>
    <?php echo $__env->make('menu.menuUser', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<form method="post"  enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>

    <div class="panel panel-default">
        <div class="panel-heading text-center">Sửa ảnh</div>
        <div class="panel-body">
            <div class="row form-group">
                <div class="col-sm-6">
                    <?php if($data['media']->media_file): ?>
                    <a href="<?php echo e(asset('public/img/'.$data['media']->media_file)); ?>">
                        <img src="<?php echo e(asset('public/img/'.$data['media']->media_file)); ?>" class="img-responsive img-thumbnail center-block">
                    </a>
                    <?php endif; ?>
                </div>
                <div class="col-sm-6">
                    <p>Người up: <?php echo e($data['media']->user->user_name); ?></p>
                    <p>Ngày up: <?php echo e($data['media']->created_at); ?></p>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Tên</label>
                <input type="text" class="form-control" name="media_name" placeholder="Tên ảnh" value="<?php echo e($data['media']->media_name); ?>">
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="form-group">
                        <label class="control-label">Thư mục</label>
                        <select name="term_id" class="form-control">
                            <option value="0">Chọn thư mục</option>
                            <?php $__currentLoopData = $data['terms']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $term): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <?php if($term->term_id == 0): ?>
                                    <option <?php echo e($data['media']->term_id == $term->id ? 'selected' : ''); ?> value="<?php echo e($term->id); ?>"><?php echo e($term->term_name); ?></option>
                                    <?php $__currentLoopData = $data['terms']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2=> $term2): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                        <?php if($term2->term_id == $term->id): ?>
                                            <option <?php echo e($data['media']->term_id == $term2->id ? 'selected' : ''); ?> value="<?php echo e($term2->id); ?>">--<?php echo e($term2->term_name); ?></option>
                                            <?php $__currentLoopData = $data['terms']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key3=> $term3): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                                <?php if($term3->term_id == $term2->id): ?>
                                                    <option <?php echo e($data['media']->term_id == $term3->id ? 'selected' : ''); ?> value="<?php echo e($term2->id); ?>">----<?php echo e($term2->term_name); ?></option>
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
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-edit"></span>  Sửa ảnh</button>
            </div>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>