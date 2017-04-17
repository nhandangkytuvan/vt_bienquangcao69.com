<?php $__env->startSection('menu'); ?>
    <?php echo $__env->make('menu.menuHome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="panel panel-default">
    <div class="panel-heading text-center">
        Đăng nhập
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form  class="form-horizontal" method="post">
                    <?php echo e(csrf_field()); ?>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" name="username" value="<?php echo e(old('username')); ?>" placeholder="username">
                    </div>
                
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" class="form-control" name="password" value="<?php echo e(old('password')); ?>" placeholder="password">
                    </div>  
                    <div style="margin-top:10px" class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                          <button type="submit" class="btn btn-success"><span class="fa fa-sign-in"></span> Đăng nhập</button>
                        </div>
                    </div>
                    <hr> 
                </form>       
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>